
    <?php include_once 'includes/templates/header.php';?>


    <section class="section contenedor">
        <h2>La mejor conferencia de Diseño Web</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin arcu orci, ultricies vel enim vel, faucibus auctor eros. Aenean ut tellus id justo commodo sollicitudin. Quisque id volutpat felis, sit amet efficitur dolor. Vestibulum imperdiet leo
            ac auctor venenatis. Phasellus purus augue, ullamcorper vitae arcu efficitur, sollicitudin lacinia ligula.
        </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop="bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>



        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres </a>
                        <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso hiden clearfix">
                        <div class="detalle-evento">
                            <h3>Html5, Css3 y Javascript</h3>
                            <p><i class="fas fa-clock"></i>10:00 hs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 dic</p>
                            <p><i class="fas fa-user"></i>Miguel Zapata</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-clock"></i>20:00 hs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 dic</p>
                            <p><i class="fas fa-user"></i>Miguel Zapata</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <div id="conferencias" class="info-curso hiden clearfix">
                        <div class="detalle-evento">
                            <h3>Cómo ser Freelancer</h3>
                            <p><i class="fas fa-clock"></i>10:00 hs</p>
                            <p><i class="fas fa-calendar-alt"></i>11 dic</p>
                            <p><i class="fas fa-user"></i>Gonzalo Fernández</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnología del Futuro</h3>
                            <p><i class="fas fa-clock"></i>20:00 hs</p>
                            <p><i class="fas fa-calendar-alt"></i>11 dic</p>
                            <p><i class="fas fa-user"></i>Cesar Les</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <div id="seminarios" class="info-curso hiden clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para Móviles</h3>
                            <p><i class="fas fa-clock"></i>10:00 hs</p>
                            <p><i class="fas fa-calendar-alt"></i>12 dic</p>
                            <p><i class="fas fa-user"></i>Luciana Deck</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Los mejores Frameworks para trabajar</h3>
                            <p><i class="fas fa-clock"></i>20:00 hs</p>
                            <p><i class="fas fa-calendar-alt"></i>12 dic</p>
                            <p><i class="fas fa-user"></i>Miguel Zapata</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="contenedor section invitados">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitados/invitado1.jpg" alt="Imagen Invitado">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitados/invitado2.jpg" alt="Imagen Invitado">
                    <p>Mica Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitados/invitado3.jpg" alt="Imagen Invitado">
                    <p>Leandro Gómez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitados/invitado4.jpg" alt="Imagen Invitado">
                    <p>Stefi Gonzalez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitados/invitado5.jpg" alt="Imagen Invitado">
                    <p>Marcos Pereyra</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitados/invitado6.jpg" alt="Imagen Invitado">
                    <p>Giselle Montes</p>
                </div>
            </li>
        </ul>
    </section>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Días</li>
                <li>
                    <p class="numero"></p>Conferencias</li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precios">
                        <h3>Pase por día</h3>
                        <p class="numero">$700</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                            <li><i class="fas fa-check"></i>Snacks Gratis</li>
                        </ul>
                        <a href="registro.html" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precios">
                        <h3>Todos los días</h3>
                        <p class="numero">$1800</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                            <li><i class="fas fa-check"></i>Snacks Gratis</li>
                        </ul>
                        <a href="registro.html" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precios">
                        <h3>Pase por 2 día</h3>
                        <p class="numero">$1300</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                            <li><i class="fas fa-check"></i>Snacks Gratis</li>
                        </ul>
                        <a href="registro.html" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>

        </div>
    </section>

    <div id="mapa"></div>

    <section class="seccion">
        <h2>testimoniales</h2>
        <div class="testimoniales contenedor clearfix">

            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                    <div class="info-testimonial clearfix">
                        <img src=" img/testimonial.jpg " alt="Imágen Testimonial ">
                        <cite>Osvaldo Escobar <span>Diseñador en @prisma</span></cite>
                    </div>
                </blockquote>

            </div>
            <div class="testimonial ">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                    <div class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg " alt="Imágen Testimonial ">
                        <cite>Osvaldo Escobar <span>Diseñador en @prisma</span></cite>
                    </div>
                </blockquote>

            </div>
            <div class="testimonial ">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                    <div class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg " alt="Imágen Testimonial ">
                        <cite>Osvaldo Escobar <span>Diseñador en @prisma</span></cite>
                    </div>
                </blockquote>

            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Regístrate al newsletter</p>
            <h3>GdlWebCamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p> días
                </li>
                <li>
                    <p id="horas" class="numero"></p> horas
                </li>
                <li>
                    <p id="minutos" class="numero"></p> minutos
                </li>
                <li>
                    <p id="segundos" class="numero"></p> segundos
                </li>

            </ul>
        </div>
    </section>
    <?php include_once 'includes/templates/footer.php';?>
   