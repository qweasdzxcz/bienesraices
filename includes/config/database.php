<?php
function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', 'qwe12345', 'bienesraices_crud');
    if (!$db) {
        echo "n ose conecto";
        exit;
    }
    return $db;
}
