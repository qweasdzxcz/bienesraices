<?php
require '../includes/funciones.php';
$auth = estaAutenticado();
if (!$auth) {
    header("Location: /bienesraices/");
}


//importar la conexion
require '../includes/config/database.php';
$db = conectarDB();
//escribir query
$query = "SELECT *FROM propiedades";

//consultar la bd
$resultadoConsulta = mysqli_query($db, $query);

//mensaje condicional
$resultado = $_GET['resultado'] ?? null;
//incluye un templade

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if ($id) {
        //eliminar archivo
        $query = "SELECT imagen FROM propiedades WHERE id =${id}";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);
        unlink('../imagenes/' . $propiedad['imagen']);

        //eliminar propiedad
        $query = "DELETE FROM propiedades WHERE id =${id}";
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            header("Location: /bienesraices/admin?resultado=3");
        }
    }
}

incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php
    if (intval($resultado) === 1) : ?>
        <p class="alerta exito">Anuncio Creado correctamente</p>
    <?php elseif (intval($resultado) === 2): ?>
        <p class="alerta exito">Anuncio Actualizado correctamente</p>
    <?php elseif (intval($resultado) === 3): ?>
        <p class="alerta exito">Anuncio Eliminado correctamente</p>
    <?php endif; ?>



    <a href="propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>


    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody> <!-- mostara resultados -->
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img class="imagen-tabla" src="../imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen propiedad"></td>
                    <td>$ <?php echo $propiedad['precio']; ?></td>
                    <td>
                        <form method="post" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a class="boton-amarillo-block" href="propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</main>

<?php
//cerrar conexion
mysqli_close($db);

incluirTemplate('footer');
?>