<?php 
    include_once 'includes/templates/header.php';
?>

    <!--Menu-->



    <section class="seccion contenedor">
        <h2 class="asd">Calendario de Eventos</h2>
        


        <?php 
            try{
                require_once('includes/funciones/db_conexion.php');
                $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
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
                    'icono' => "fa" . " " . $eventos['icono'],
                    'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                );

                //estp agrupa los eventos que sean de la misma fecha
                $calendario[$fecha][] = $evento;
            } ; //while de fetch assoc ?>

            <?php
                //Imprime todos los arreglos
                foreach($calendario as $dia => $lista_eventos) { ?>
                    <h3>
                        <i class= "fa fa-calendar">  
                        
                        <?php 
                            setlocale(LC_TIME, 'spanish');
                            echo strftime("%A, %d de %B, %Y", strtotime($dia));
                        ?>
                        </i>
                    </h3>
                    <?php
                        foreach($lista_eventos as $evento) { ?>
                            <div class="dia" id="dia">
                                <p class="titulo"> <?php echo $evento['titulo']; ?> </p>
                                <p class="hora"> <i class= "fa fa-clock" aria-hidden="true"></i> 
                                    <?php echo $evento['fecha'] . " " . $evento['hora']; ?> 
                                </p>
                                <p class="categoria"> <i class= "<?php echo $evento['icono']; ?>" aria-hidden="true"></i> 
                                    
                                    <?php echo $evento['categoria']; ?> 
                                </p>
                                <p class="invitado"> <i class= "fa fa-user" aria-hidden="true"></i> 
                                    <?php echo $evento['invitado']; ?> 
                                </p>
                            </div>
                <?php } //fin for each lista eventos?>
                    

            <?php  } // fin del for each de día ?>
            
        </div> 
        <?php 
            $conn->close();
        ?>
    </section>


    <?php include_once 'includes/templates/footer.php';?>