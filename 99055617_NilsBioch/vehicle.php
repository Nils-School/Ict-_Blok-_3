<?php 
include'datalayer.php'; 
$currentVehicleId = $_GET['id'];
$conn = connectie();
$result = fetchallvehicles($conn);
$data = fetchcurrent($conn, $currentVehicleId);
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
        <h1>Bekijk hier <?php echo $data["name"] ?></h1>
        <div class="align-self-center">
            <a class="btn-lg btn-info text-white" href="updateVehicle.php?id=<?php echo $data['id']?>">update voertuig</a>
            <a class="btn-lg btn-danger text-white" href="deleteVehicle.php?id=<?php echo $data['id']?>">delete voertuig</a>
        </div>
    </div>
    <div class="content mt-2">
        <div>
            <div>
                <div class="text-center border">
                    <img class="img-fluid p-1 w-25 h-25" src="img/<?php echo $data["img"]; ?>" />

                    <div class="border-bottom">
                        <strong>Naam: <?php echo $name = $data["name"]; ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Kleur: <?php echo $data["color"] ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Gewicht: <?php echo $data["weight"] ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Prijs: ¢<?php echo $data["price"] ?></strong>
                    </div>
                    <div>
                        <strong>Merk: 
                        
                        <?php getMerk($conn, $currentVehicleId);  ?>
                        </strong>
                    </div>
                </div>
            </div>
            <p class="card-text">
            <?php echo $data["description"] ?>
            </p>
        </div>
    </div>
    <hr>
</div>
<?php include'header_footer/footer.php' ?>
</body>
</html>