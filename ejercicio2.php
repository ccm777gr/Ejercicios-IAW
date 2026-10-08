<?php
$alumnos = [
    ['Atienza Bermúdez, Alejandro', 'H', '45'],
    ['Calderer Sánchez, Lucas', 'H', '3'],
    ['Cano Merino, Carlos', 'H', '19'],
    ['Chari, Abdelali', 'H', '25'],
    ['García Zarco, Francisco José', 'H', '32'],
    ['Gómez Pérez, Samuel', 'H', '145'],
    ['Iáñez Navarro, Daniel', 'H', '12'],
    ['López Lasheras, Alan', 'H', '17'],
    ['Maldonado Cabezas, Francisco', 'H', '20'],
    ['Martín Arias, Carlos', 'H', '44'],
    ['Moreno González, Alexandra', 'M', '119'],
    ['Muñoz Moreno, Elisabet', 'M', '25'],
    ['Ourhzif, Aymane', 'H', '1'],
    ['Sánchez Ortiz, Emilio David', 'H', '22'],
    ['Sánchez Rodríguez, Beatriz', 'M', '73'],
    ['Torres Gómez, Ignacio', 'H', '10'],
    ['Uréndez Jiménez, Alba', 'M', '31'],
    ['Uribe Aranda, Francisco', 'H', '23'],
    ['Velasco Clavero, Pablo', 'H', '41'],
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
            <td>Edad</td>
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
            <td style="background-color: Green;"><?= $alumnoGenero[1] ?></td>
            <?php
                }; 
            ?>
            <?php
                if ($alumnoGenero[1] == 'M' ) {
            ?>
            <td style="background-color: Blue;"><?= $alumnoGenero[1] ?></td>
            <?php
                }; 
            ?>
            <?php
                if (($alumnoGenero[2]%2) == '1' ) {
            ?>
            <td style="background-color: Green;"><?= $alumnoGenero[2] ?></td>
            <?php
                }; 
            ?>
            <?php
                if (($alumnoGenero[2]%2) == '0' ) {
            ?>
            <td style="background-color: Blue;"><?= $alumnoGenero[2] ?></td>
            <?php
                }; 
            ?>
        </tr>
        <?php
        };
        ?>
    </table>
    <!-- ejercicio1: si el genero es masculino la linea se pone en verde, si es femenino la linea se pone en azul -->
    <!-- ejercicio2: agregar a la informacion de cada alumno su edad y añadir otra columna con esa informacion -->
    <!-- si la edad es par azul, si es impar verde -->
</body>
</html>