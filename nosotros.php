<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, repellat nulla. Expedita a neque quae
                voluptas magni saepe quo ducimus obcaecati aliquid dolor omnis iure quaerat, quam cumque ipsa
                minima?
                Deleniti facilis mollitia maiores ad error, iste qui nam ipsa quisquam repellat dolor incidunt eos,
                fugiat quidem ipsam molestiae. Eaque reprehenderit laboriosam voluptates corporis neque ipsum
                mollitia soluta sapiente voluptate.
                Enim voluptatem nihil corrupti distinctio saepe numquam facilis officia soluta. Sit temporibus
                deserunt maiores inventore, necessitatibus pariatur, vitae perspiciatis explicabo, repudiandae sunt
                neque fugiat quas delectus maxime ducimus suscipit dolor.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae voluptas sint exercitationem
                quisquam deserunt similique officia voluptatum corrupti unde iste doloribus voluptate modi,
                distinctio omnis a perferendis et numquam sunt.
                Quis quam delectus aspernatur doloribus eveniet eaque ea harum culpa iusto distinctio, temporibus
                odio dolores aut, illum illo perspiciatis odit provident. Eligendi officia excepturi sint saepe, id
                quo aliquam assumenda!</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
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
</section>

<?php
incluirTemplate('footer');
?>