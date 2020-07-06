<?php 
include'datalayer.php'; 
$conn = connectie();
$result = fetchallvehicles($conn);
function createNewVehicle($id, $name, $img, $description){
    echo"
    <div class='mt-2 d-inline-flex w-25 '>
        <div class='card'>
            <img class='card-img-top img-fluid' src='img/$img' alt='Card image cap'>
            <div class='card-body'>
                <h4 class='card-title'> $name </h4>
                <p class='card-text'>$description </p>
                <a href='vehicle.php?id=$id' class='btn btn-primary'>Meer details</a>
            </div>
        </div>
    </div>";
    }
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
<div class="mb-5 mt-2">
    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle voertuigen</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createVehicle.php">Nieuw voertuig</a>
    </div>
    <?php

    for ($i=0; $i < count($result); $i++) { 
        $data = $result[$i];
        createNewVehicle($data["id"],$data["name"],$data["img"],$data["description"]);
    }
    ?>
</div>
<?php include'header_footer/footer.php' ?>
</body>
</html>