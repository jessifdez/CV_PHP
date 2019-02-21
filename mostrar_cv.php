<!DOCTYPE HTML>
<html>  
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <?php
 echo "<table class='table'>";
echo "<tr class='primary'><th>Epígrafe</th><th>Texto</th></tr>";
$servername = "localhost";
$username = "id8707224_jessica";
$password = "123456";
$dbname = "id8707224_bbdd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM datos_cv";
    // set the resulting array to associative
    $result = $conn->query($sql);
    $lista_datos=$result->fetchAll();
	for ($i=0; $i<count($lista_datos); $i++)
		{
			$fila=$lista_datos[$i];
			echo('<tr><td>'.$fila['epigrafe'].'</td><td>'.$fila['texto'].'</td></tr>');
		}
    }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
</div>
</body>
</html>