<?php
//incluir db
require 'includes/app.php';
$db = conectarDB();
//autenticar el usuario
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */
    //evitar inyecciones y validar correo
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio";
    }
    if (empty($errores)) {
        //revisar existencia de usuario
        $query = "SELECT * FROM usuarios WHERE email='${email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            //revisar si es password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            //verificar si es password es correcto
            $auth = password_verify($password, $usuario['password']);
            if ($auth) {
                //usuario autenticado
                session_start();
                //llenar el array de sesion
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                header("Location: /bienesraices/admin/");
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}



//incluye el header
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>


    <form class="formulario" method="post">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Tu email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Tu password" id="password">

        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>