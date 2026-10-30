<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alta de alumnos</h1>
    <form action="ejercicio.php" method="post">
        <!-- post: crear y editar -->
        <label for="nombre">Nombre: </label>
        <br>
        <input type="text" name="nombre" id="nombre" value="" placeholder="Introduce el nombre: " minlength="2" maxlength="100" required>
        <br><br>

        <label for="abreviatura">abreviatura: </label>
        <br>
        <input type="text" name="abreviatura" id="abreviatura" value="" placeholder="Introduce la abreviatura: " minlength="2" maxlength="100" required>
        <br><br>

        <label for="creditos">creditos: </label>
        <br>
        <input type="number" name="creditos" id="creditos" value="" placeholder="Introduce la cantidad de creditos: " minlength="0.00" maxlength="100000.00" step="0.01" required>
        <br><br>

        <label for="horas_semanales">horas_semanales: </label>
        <br>
        <input type="number" name="horas_semanales" id="horas_semanales" value="" placeholder="Introduce las horas semanales: " minlength="0" maxlength="1000" step="0.1" required>
        <br><br>

        <button type="submit">Insertar tabla</button>
    </form>
</body>
</html>