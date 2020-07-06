<?php 
function connectie(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vehicle";
    $conn;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $conn;
    }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
    }
}
// connectie
// $name, $img, $color, $weight, $price, $description, $typeId

function fetchallvehicles($conn){
    $result;
    $stmt = $conn->prepare("SELECT * FROM vehicles");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
}
function fetchallMerk($conn){
    $stmt = $conn->prepare("SELECT * FROM vehicles_types");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
function fetchcurrentMerk($conn, $namemerk){
    $currentTypeId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM vehicles_types WHERE id = $currentTypeId");
    $stmt->execute();
    $data = $stmt->fetch();
    $namemerk = $data['name'];
    $id = $data['id'];
    
}
function fetchallcurrentvehicles($conn){
    $currentTypeId = $_GET['id'];
    $result;
    $stmt = $conn->prepare("SELECT * FROM vehicles WHERE typeId = $currentTypeId");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
}


    function getMerk($conn,$currentVehicleId ){
        $stmt = $conn->prepare("SELECT vehicles_types.name FROM vehicles_types INNER JOIN vehicles ON vehicles.typeId = vehicles_types.id WHERE vehicles.id = $currentVehicleId");
        $stmt->execute();     
        $data = $stmt->fetch();
        $typename = $data["name"];
        echo $typename;
     }
     
     function createNewVehicleMerk($id, $name){
      echo"  
        <ul class='list-group align-items-center'>
        <li class='list-group-item  w-50  '>
            <a href='type.php?id=$id'>$name</a>
        </li>
    </ul>";
     }
     function createNewOptionMerk($id, $name){
         echo"<option value='$id'>$name</option>";
     }
function fetchmerk($conn){
    $stmt = $conn->prepare("SELECT * FROM vehicles_types");
    $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
}
function createVehicle($conn, $name, $afbeelding, $kleur, $gewicht, $prijs, $beschrijving, $id){
    $sql="INSERT INTO vehicles (name, img, color, weight, price, description, typeId) 
    VALUES ('$name', '$afbeelding', '$kleur', '$gewicht', '$prijs', '$beschrijving', '$id')";
       $stmt = $conn->prepare($sql);
       $stmt->execute(); 
       header("Location: index.php");    
}


function updateVehicle($conn, $name, $afbeelding, $kleur, $gewicht, $prijs, $beschrijving, $id, $currentVehicleId){
    $sql = "UPDATE vehicles  SET name='$name', img='$afbeelding', color='$kleur', weight='$gewicht', price='$prijs', description='$beschrijving', typeId='$id'  WHERE id=$currentVehicleId";
    $stmt = $conn->prepare($sql);
       $stmt->execute();  
       header("Location: vehicle.php?id=$currentVehicleId");
       
}

function deleteVehicle($conn, $currentVehicleId){
    $sql = "DELETE FROM vehicles WHERE id='$currentVehicleId';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();  
    header("Location: index.php");
}

function fetchcurrentvehicle($conn){
    $result;
    $currentTypeId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM vehicles WHERE Typeid=$currentTypeId");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function fetchcurrent($conn, $currentVehicleId){
    $currentVehicleId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM vehicles WHERE id = $currentVehicleId");
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}

function fetchCurrenvehicletype($conn, $currentVehicleId){
    $currentVehicleId = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM vehicles_types WHERE id = $currentVehicleId");
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>