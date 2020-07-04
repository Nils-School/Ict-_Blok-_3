<?php 
include'datalayer.php'; 
$conn = connectie();
$result = fetchallvehicles($conn);

$currentVehicleId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM vehicles WHERE id = $currentVehicleId");
    $stmt->execute();
    $data = $stmt->fetch();

    $stmt = $conn->prepare("SELECT * FROM vehicles_types");
    $stmt->execute();
    $resulttype = $stmt->fetchAll();    
    

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toets CRUD Blok 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include'header_footer/header.php' ?>
<h1>Weet u zeker dat u <?php echo $data['name'] ?> wilt verwijderen</h1>

<div class="mb-5 mt-2 d-flex justify-content-center">
    <form method="post">
    <input class="btn-lg btn-primary text-white m-3" type="submit" value="Ja!">
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            deleteVehicle($conn, $currentVehicleId);
        }
        ?>
    </form> <form action='index.php'>
<input class="btn-lg btn-primary text-white m-3" type="submit" value="Nee!">
    </form>
</div>
<?php include'header_footer/footer.php' ?> 
</body>
</html>