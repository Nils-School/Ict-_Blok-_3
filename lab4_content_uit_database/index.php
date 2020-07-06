<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
	<?php include 'includes/header.php'?>

	<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databank_php";

try {
    $id = $_GET["id"];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("SELECT * FROM onderwerpen WHERE id = $id");
    $stmt->execute();
    $result = $stmt->fetch();
    $description =  $result["description"];
    $imgPath = $result["image"];
	
    echo $description ;
    
    echo "<img src=". './images/' . $imgPath. " alt=NILS IS NOOB>";
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?> 
	
	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->


	<!-- laad hier via php je footer in (vanuit je includes map)-->
	<?php include 'includes/footer.php'?>

</body>
</html>