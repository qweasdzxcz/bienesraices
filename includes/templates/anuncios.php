<?php
//importar conexion
require __DIR__ . '/../config/database.php';

$db = conectarDB();
//consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//obtener resultado
$resultado = mysqli_query($db, $query);

?>

<section class="seccion contenedor">
    <div class="contenedor-anuncios">
        <?php while ($propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">

                <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen Propiedad">


                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo']; ?></h3>
                    <p><?php echo $propiedad['descripcion']; ?></p>
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
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg"
                                alt="icono habitaciones">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                    </ul>
                    <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Ver Propiedad</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div><!-- contenedor anuncios -->
</section>
<?php

//cerrar conexion
mysqli_close($db);

?>