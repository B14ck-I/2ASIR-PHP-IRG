<?php

function obtenerNegativo(&$numero) {
    $numero = $numero * (-1);
}

$miNum = $_POST['numero'];
obtenerNegativo($miNum);

echo "El negativo del número dado es: $miNum";

?>
