<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccioncontenido-centrado">
    <h1>Casa en Venta frente al Bosque</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                    alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aut ratione nemo voluptas accusantium
            explicabo culpa quas perferendis, labore, modi quod fuga molestias fugit laborum hic? Nesciunt ut culpa
            nihil!
            Ducimus maiores beatae eligendi fugit odio rem veritatis. Sed molestiae, debitis repellendus optio natus
            a eveniet vero inventore id sapiente iste maxime eius accusantium aperiam eum itaque possimus molestias
            distinctio.
            Harum voluptatum incidunt hic temporibus aspernatur! Nam cupiditate aperiam ut molestiae harum
            reiciendis nemo perferendis! Libero atque, ipsa, placeat eum non pariatur fugit unde, odit minima illo
            sint. Et, nam.
            Exercitationem rem dolorum eaque, minima aspernatur quasi dolore tenetur quos illo officia neque
            reprehenderit quod quibusdam! Odio expedita sed dignissimos, totam commodi error, adipisci asperiores,
            fuga tenetur obcaecati beatae vero.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias aliquam labore magnam quod molestiae!
            Perspiciatis sit iste labore nobis, officiis praesentium. Quidem, repudiandae perspiciatis. Tenetur,
            veniam aspernatur? Optio, molestias esse.
            Blanditiis, odit veniam. Placeat nihil fugiat odio, perferendis porro dolor inventore accusamus vero
            sapiente mollitia et veritatis ad dignissimos amet. Atque incidunt ea veritatis corrupti rerum eaque
            quasi optio earum!
            Delectus odit deserunt adipisci aspernatur quos, voluptatibus, neque minus temporibus quibusdam
            inventore ab eos illo dolores tempora maxime molestiae minima impedit. Incidunt, perspiciatis similique!
            Aspernatur illum possimus eligendi minima officiis!</p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>