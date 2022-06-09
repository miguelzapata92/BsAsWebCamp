<?php include_once 'includes/templates/header.php';?>
    <!--Menu-->



    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
        <?php 
            try{
                require_once('includes/funciones/db_conexion.php');
                $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.id_invitado ";
                $sql .= " ORDER BY evento_id "; 
                $resultado = $conn->query($sql);
            } catch (\Exception $e){
                echo $e->getMessage();
            }
        
        ?>
        <div class="calendario">
            <?php 
                $calendario = array();
               while ($eventos = $resultado->fetch_assoc() ) { 

                    // obtiene la fecha del evento

                    $fecha = $eventos['fecha_evento'];
                   $evento = array(
                       'titulo' => $eventos['nombre_evento'],
                       'fecha' => $eventos['fecha_evento'],
                       'hora' => $eventos['hora_evento'],
                       'categoria' => $eventos['cat_evento'],
                       'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                   );

                   //estp agrupa los eventos que sean de la misma fecha
                   $calendario[$fecha][] = $evento;
                   ?>
                  
            <?php } ; //while de fetch assoc ?> 

            <?php
                //Imprime todos los arreglos
                foreach($calendario as $dia => $lista_eventos) { ?>
                    <h3>
                        <i class= "fa fa-calendar" ></i>
                        
                        <?php 
                            setlocale(LC_TIME, 'spanish');
                            echo strftime("%A, %d de %B, %Y", strtotime($dia));
                        ?>
                    </h3>
                    

              <?php  } ?>
            <pre>
                        <?php var_dump($calendario); ?>
            </pre>
        </div>
        <?php 
            $conn->close();
        ?>
    </section>


    <?php include_once 'includes/templates/footer.php';?>