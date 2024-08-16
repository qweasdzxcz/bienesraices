<?php

//base de datos
require '../../includes/config/database.php';

$db = conectarDB();
/* var_dump($db); */

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>crear</h1>
    <a href="../" class="boton boton-verde">volver</a>

    <form class="formulario" method="post" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" placeholder="titulo propiedad">

            <label for="precio">Titulo</label>
            <input type="number" id="titulo" placeholder="precio propiedad">

            <label for="imagen">imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, iamge/png">

            <label for="descripcion">descripcion</label>
            <textarea id="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la propiedad</legend>
            <label for="habitaciones">habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ejm: 3" min="1" max="9">

            <label for="wc">baños</label>
            <input type="number" id="wc" placeholder="Ejm: 3" min="1" max="9">

            <label for="estacionamiento">estacionamiento</label>
            <input type="number" id="estacionamiento" placeholder="Ejm: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="" id="">
                <option value="1">juan</option>
                <option value="2">karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>