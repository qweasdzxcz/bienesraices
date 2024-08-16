<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>

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
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
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
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.html">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
            </a>
            <p>
                Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle
                vida a tu espacio
            </p>
        </div>
    </article>
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
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
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
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.html">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span> </p>
            </a>
            <p>
                Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle
                vida a tu espacio
            </p>
        </div>
    </article>
</main>

<?php
incluirTemplate('footer');
?>