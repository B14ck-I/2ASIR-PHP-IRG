<?php
function calcMed($notitas) {
    $totalNotitas = count($notitas);

    if ($totalNotitas > 0) {
        $sumaNotas = array_sum($notitas);
        return $sumaNotas / $totalNotitas;
    }
}

function imprimirNotasMayoresMedia($notitas, $media) {
    echo "Notas mayores que la media:\n";
    foreach ($notitas as $nota) {
        if ($nota > $media) {
            echo $nota . ", ";
        }
    }
}


$notasAlumno = [4,5,3,2,7,6,0];
$mediaNotas = calcMed($notasAlumno);


if ($mediaNotas !== null) {
    imprimirNotasMayoresMedia($notasAlumno, $mediaNotas);
} else {
    echo "No hay notas disponibles.";
}
?>
