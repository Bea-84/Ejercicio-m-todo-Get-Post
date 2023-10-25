<?php

$u=$_POST["usuario"];
$p=$_POST["password"];

if (empty($u) || empty($p)) {
    echo "Por favor, introduce tanto un usuario como una contraseña.";
} else {
    echo "Bienvenido, puedes continuar.";
}

?>

<h2 style="color:orange">Bienvenido: <?=$u?></h2>