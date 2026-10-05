<?php
$alumnos = [
    ['Atienza Bermúdez, Alejandro', 'H'],
    ['Calderer Sánchez, Lucas', 'H'],
    ['Cano Merino, Carlos', 'H'],
    ['Chari, Abdelali', 'H'],
    ['García Zarco, Francisco José', 'H'],
    ['Gómez Pérez, Samuel', 'H'],
    ['Iáñez Navarro, Daniel', 'H'],
    ['López Lasheras, Alan', 'H'],
    ['Maldonado Cabezas, Francisco', 'H'],
    ['Martín Arias, Carlos', 'H'],
    ['Moreno González, Alexandra', 'M'],
    ['Muñoz Moreno, Elisabet', 'M'],
    ['Ourhzif, Aymane', 'H'],
    ['Sánchez Ortiz, Emilio David', 'H'],
    ['Sánchez Rodríguez, Beatriz', 'M'],
    ['Torres Gómez, Ignacio', 'H'],
    ['Uréndez Jiménez, Alba', 'M'],
    ['Uribe Aranda, Francisco', 'H'],
    ['Velasco Clavero, Pablo', 'H'],
];
//$alumnos[] = 'primer alumno';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>colorines</h1>
    <table border="1">
        <tr>
            <td>#</td>
            <td>Alumno</td>
            <td>Género</td>
        </tr>
        <?php
        foreach($alumnos as $indice => $alumnoGenero) {

        ?>
        <tr>
            <td><?= $indice ?></td>
            <td><?= $alumnoGenero[0] ?></td>
            <?php
                if ($alumnoGenero[1] == 'H' ) {
            ?>
            <td backgroundcolor="Green"><?= $alumnoGenero[1] ?></td>
            <?php
                }; 
            ?>
            <?php
                if ($alumnoGenero[1] == 'M' ) {
            ?>
            <td backgroundcolor="Blue"><?= $alumnoGenero[1] ?></td>
            <?php
                }; 
            ?>
        </tr>
        <?php
        };
        ?>
    </table>
    <!-- ejercicio1: si el genero es masculino la linea se pone en verde, si es femenino la linea se pone en azul -->
    <!-- ejercicio2: agregar a la informacion de cada alumno su edad y añadir otra columna con esa innformacion -->
    <!-- si la edad es par azul, si es impar verde -->
</body>
</html>