<?php
require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aut veritatis dolor cum sapiente sed
                voluptatibus praesentium iure provident, quibusdam vitae aspernatur error dolore quam, quasi
                mollitia rerum laboriosam voluptatem?</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aut veritatis dolor cum sapiente sed
                voluptatibus praesentium iure provident, quibusdam vitae aspernatur error dolore quam, quasi
                mollitia rerum laboriosam voluptatem?</p>

        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aut veritatis dolor cum sapiente sed
                voluptatibus praesentium iure provident, quibusdam vitae aspernatur error dolore quam, quasi
                mollitia rerum laboriosam voluptatem?</p>

        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>
    <?php
    $limite = 3;
    include 'includes/templates/anuncios.php';
    ?>

    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
    </div>

</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro BLog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                </a>
                <p>
                    Consejos para construir la terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero
                </p>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
                </a>
                <p>
                    Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle
                    vida a tu espacio
                </p>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una forma excelente, muy buena atención y la casa que me ofrecieron
                cumple con todas mis expectativas
            </blockquote>
            <p>- QWEASDZXC</p>
        </div>
    </section>
</div>

<?php
incluirTemplate('footer');
?>