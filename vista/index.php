<?php require_once("layout/header.php");
?>
<div class="banner">
    ¡Descubre la belleza de Chiapas!
</div>

<div class="content">
    <section id="about">
        <h2 class="section-title">Sobre Nosotros</h2>
        <p style="font-size: 20px;">Somos una agencia de turismo con más de 10 años de experiencia en la creación de experiencias inolvidables. Nuestros tours te llevarán a los lugares más impresionantes de Chiapas, desde las majestuosas Cascadas de Agua Azul hasta la histórica ciudad de San Cristóbal de las Casas.</p>
    </section>

    <section id="services">
        <h2 class="section-title">Nuestros Servicios</h2>
        <div class="services">
            <div>
                <h3>Paquetes Turísticos</h3>
                <p>Ofrecemos paquetes que incluyen transporte, hospedaje y guías turísticos certificados.</p>
                <a type="button" class="btn btn-outline-success" href="../vista/admin/compras.php">Mas info...</a>
            </div>
            <div>
                <h3>Rutas Personalizadas</h3>
                <p>Creamos rutas a medida según tus preferencias y tiempo disponible.</p>
                <a type="button" class="btn btn-outline-success" href="../vista/admin/rutas.php">Mas info...</a>
            </div>
            <div>
                <h3>Excursiones de Aventura</h3>
                <p>Vive la adrenalina con nuestras excursiones de aventura en la selva y los ríos de Chiapas.</p>
                <a type="button" class="btn btn-outline-success" href="../vista/admin/excursiones.php">Mas info...</a>
            </div>
        </div>
    </section>

    <section id="destinations">
        <h2 class="section-title">Destinos Populares</h2>
        <div class="destinations">
            <div>
                <h3>Cascadas de Agua Azul</h3>
                <p>Un paraíso natural de aguas cristalinas y cascadas impresionantes.</p>
                <img src="../vista/img/Cascadas_Agua.jpeg" height="200px" width="390px" alt="">
            </div>
            <div>
                <h3>San Cristóbal de las Casas</h3>
                <p>Una ciudad colonial llena de historia, cultura y tradiciones.</p>
                <img src="../vista/img/Sancris.jpeg" height="200px" width="390px" alt="">
            </div>
            <div>
                <h3>Cañón del Sumidero</h3>
                <p>Explora este increíble cañón en un recorrido en lancha por el río Grijalva.</p>
                <img src="../vista/img/Canon.jpeg" height="200px" width="390px" alt="">
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="section-title">Contáctanos</h2>
        <div class="contact-form">
            <form action="enviar.php" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
</div>
<?php require_once("layout/footer.php");
?>
