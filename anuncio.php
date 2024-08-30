<?php

//recibir id
$id = $_GET['id'] ?? null;
$id = filter_var($id, FILTER_VALIDATE_INT);
//validar id valid oen la url
if (!$id) {
    header("Location: /bienesraices/");
}
require 'includes/app.php';
$db = conectarDB();

$query = "SELECT * FROM propiedades WHERE id=${id}";
$resultado = mysqli_query($db, $query);
//validar propeidad exitente
if (!$resultado->num_rows) {
    header("Location: /bienesraices/");
}
$propiedad = mysqli_fetch_assoc($resultado);

incluirTemplate('header');
?>

<main class="contenedor seccioncontenido-centrado">
    <h1><?php echo $propiedad['titulo']; ?></h1>
    <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la Propiedad">
    <div class="resumen-propiedad">
        <p class="precio">$ <?php echo $propiedad['precio']; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $propiedad['wc']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg"
                    alt="icono estacionamiento">
                <p><?php echo $propiedad['estacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $propiedad['habitaciones']; ?></p>
            </li>
        </ul>
        <p><?php echo $propiedad['descripcion']; ?></p>

    </div>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>