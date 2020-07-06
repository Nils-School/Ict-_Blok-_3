<?php 
include'datalayer.php'; 
$currentVehicleId = $_GET['id'];
$conn = connectie();
$data = fetchcurrent($conn, $currentVehicleId);
$typedata = fetchmerk($conn);  
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
<?php 
include'header_footer/header.php'; 
 $nameErr='' 
 ?>
<div class="mb-5 mt-2">
    <h1>Wijzig de voertuiggegevens</h1>
    <?php 
    $nameErr=''; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]) or empty($_POST["afbeelding"]) or empty($_POST["kleur"]) or empty($_POST["gewicht"]) or empty($_POST["prijs"])or empty($_POST["beschrijving"]) ) {
          $nameErr = "Veld is verplicht";
        } else {
          $name = test_input($_POST["name"]);
          $afbeelding = test_input($_POST["afbeelding"]);
          $kleur = test_input($_POST["kleur"]);
          $gewicht = test_input($_POST["gewicht"]);
          $prijs = test_input($_POST["prijs"]);
          $beschrijving = test_input($_POST["beschrijving"]);
          $currentVehicleId = $_GET['id'];
          updateVehicle($conn, $name, $afbeelding, $kleur, $gewicht, $prijs, $beschrijving, $id=$_POST["merk"], $currentVehicleId);
        }
    }
    ?>
    <form method='post'>
    Naam:<br><input type="text" name="name" value="<?php echo $data['name'] ?>"><span class="error">* <?php echo $nameErr;?></span></br>
    Afbeelding:<br><input type="text" name="afbeelding" value="<?php echo $data['img'] ?>"><span class="error">* <?php echo $nameErr;?></span></br>
    Kleur:<br><input type="text" name="kleur" value="<?php echo $data['color'] ?>"><span class="error">* <?php echo $nameErr;?></span></br>
    Gewicht:<br><input type="number" name="gewicht" value="<?php echo $data['weight'] ?>"><span class="error">* <?php echo $nameErr;?></span></br>
    Prijs:<br><input type="number" name="prijs" value="<?php echo $data['price']  ?>"><span class="error">* <?php echo $nameErr;?></span></br>
    Beschrijving:<br><textarea  name="beschrijving" rows="5" cols="40"><?php echo $data['description'] ?></textarea>*<?php echo $nameErr;?></span></br>
    <select id="merk" name="merk">
    <?php
foreach($typedata as $datatype){
    createNewOptionMerk($datatype["id"],$datatype["name"]);
    }
    ?>
    </select><br>
  <input class="btn-lg btn-primary text-white " type="submit" value="Update">
    </form>
</div>
<?php include'header_footer/footer.php' ?>
</body>
</html>