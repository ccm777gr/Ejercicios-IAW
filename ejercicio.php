<?php

// $sql = "CREATE TABLE IF NOT EXISTS modulos (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         nombre VARCHAR(100) NOT NULL unique,
//         abreviatura VARCHAR(5) NOT NULL unique,
//         creditos DECIMAL(4,2) NOT NULL,
//         horas_semanales smallint
//     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$host     = 'mysql';
$db       = 'siga';
$user     = 'sigauser';
$password = 'sigapassword';
$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if(!isset($_POST['nombre']) || !isset($_POST['abreviatura']) || !isset($_POST['creditos']) || !isset($_POST['horas_semanales'])) {
        header('Location: error.php');
        exit;
    }
    
    $nombre = $_POST['nombre'];
    $abreviatura = $_POST['abreviatura'];
    $creditos = $_POST['creditos'];
    $horas_semanales = $_POST['horas_semanales'];

    if ($nombre == ''){
    $nombre = null;
    }
    if ($abreviatura == ''){
    $abreviatura = null;
    }
    if ($creditos == ''){
    $creditos = null;
    }
    if ($horas_semanales == ''){
    $horas_semanales = null;
    }

    $sql = "INSERT INTO modulos (nombre, abreviatura, creditos, horas_semanales)
                VALUES (:nombre,  
                        :abreviatura, 
                        :creditos, 
                        :horas_semanales)";
    
    $sentencia_preparada = $pdo->prepare($sql);
    $datos = [
        'nombre' => $nombre,
        'abreviatura' => $abreviatura,
        'creditos' => $creditos,
        'horas_semanales' => $horas_semanales
    ];

    //$pdo->exec($sql);
    $sentencia_preparada->execute($datos);
    //echo('Insert: ok<br>');
    //Redireccion a exito
    header('Location: exito.php');
} catch (Exception $error) {
    //echo ('Se ha producido un error, aquí más información: <br>');
    //echo ('<pre>' . var_export($error, true) . '</pre>');
    //echo ($error->getMessage());
    //Redireccion a error
    header('Location: error.php');
}