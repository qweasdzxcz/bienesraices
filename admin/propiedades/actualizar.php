<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();
if (!$auth) {
    header("Location: /bienesraices/");
}

//recibir id
$id = $_GET['id'] ?? null;
$id = filter_var($id, FILTER_VALIDATE_INT);
//validar id valid oen la url
if (!$id) {
    header("Location: /bienesraices/admin");
}
//base de datos
require '../../includes/config/database.php';

$db = conectarDB();
/* var_dump($db); */

//consulta propiedades
$consulta = "SELECT *FROM propiedades where id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

/* echo "<pre>";
var_dump($propiedad);
echo "</pre>"; */

//consulta vendedores
$consulta = "SELECT *FROM vendedores";
$resultado = mysqli_query($db, $consulta);
//arreglo con mensajes de errores
$errores = [];

$titulo = $propiedad['titulo'];
$precio =  $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedorId = $propiedad['vendedoresId'];
$imagenPropiedad = $propiedad['imagen'];
//ejecutar el código después de enviar form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date("Y/m/d");

    //asignar fiels hacia una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripcion y debe tener al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }
    if (!$wc) {
        $errores[] = "El numero de baños es obligatorio";
    }
    if (!$estacionamiento) {
        $errores[] = "El numero de lugares de estacionamiento es obligatorio";
    }

    if (!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }

    //validar tam -max 1mb
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }
    /* echo "<pre>";
    var_dump($errores);
    echo "</pre>"; */

    //revisar arreglo errores
    if (empty($errores)) {

        //crear carpeta
        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        //subida de archivos
        if ($imagen['name']) {
            //eliminar imagen previa
            unlink($carpetaImagenes . $propiedad['imagen']);

            //generar un nomrbe unico
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            //subir
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }


        //insertar db
        $query = " UPDATE propiedades SET titulo='${titulo}',precio='${precio}',imagen='${nombreImagen}', descripcion='${descripcion}',habitaciones=${habitaciones},wc=${wc},estacionamiento=${estacionamiento},vendedoresId=${vendedorId}
                    WHERE id =${id}";

        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            //redireccionar
            header("Location: /bienesraices/admin?resultado=2");
        }
    }
}


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>
    <a href="../" class="boton boton-verde">volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" placeholder="precio propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <img src="../../imagenes/<?php echo $imagenPropiedad; ?>" alt="Imagne Propiedad" class="imagen-small">

            <label for=" descripcion">descripcion</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la propiedad</legend>
            <label for="habitaciones">habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejm: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">baños</label>
            <input type="number" id="wc" name="wc" placeholder="Ejm: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejm: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option>--Selecione--</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>


                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>