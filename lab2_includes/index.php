<?php 
$page;
$id = $_GET["id"];
  if ($id >0 && $id <4){
      $page = "./pages/" . $id . ".php";
  } else{
    $page = "./pages/1.php";  
  }
  ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
<?php include 'includes/header.php'?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php include $page ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php include 'includes/footer.php'?>

</body>
</html>