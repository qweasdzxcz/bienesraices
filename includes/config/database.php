<?php
function conectarDB(): mysqli
{
    $db = new mysqli('localhost', 'root', 'qwe12345', 'bienesraices_crud');
    if (!$db) {
        echo "no se conecto";
        exit;
    }
    return $db;
}
