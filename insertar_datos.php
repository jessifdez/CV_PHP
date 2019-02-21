<!DOCTYPE HTML>
<html>  
<body>
<?php //CREAMOS LA TABLA
$servername = "localhost";
$username = "id8707224_jessica";
$password = "123456";
$dbname = "id8707224_bbdd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS datos_cv (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    epigrafe VARCHAR(50) NOT NULL,
    texto VARCHAR(200) NOT NULL)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tabla creada<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
 <?php //INSERTAMOS DATOS EN LA TABLA
$servername = "localhost";
$username = "id8707224_jessica";
$password = "123456";
$dbname = "id8707224_bbdd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$epigrafe=$_POST["epigrafe"];
	$texto=$_POST["texto"];
    $sql = "INSERT INTO datos_cv (epigrafe,texto) VALUES ('$epigrafe','$texto')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Has añadido un nuevo dato al epígrafe ".$epigrafe;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
</body>
</html>