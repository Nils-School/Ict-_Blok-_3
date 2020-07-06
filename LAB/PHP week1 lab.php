<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="PHPweek1lab.css">
</head>
<body>
    
    <!-- <img class="evening" src="evening.png" alt="evening"> 
    <img class="morning" src="morning.png" alt="morning"> 
    <img class="night" src="night.png" alt="night">  -->
    <?php 
    date_default_timezone_set("Europe/Amsterdam"); 
    $date = date("h:i:s");
    $tijdvak= " ";
    if($date >= "06:00:00" && $date <= "12:00:00"){
        echo '    <style>body{ background-image: url("morning.png");} </style>';
        $tijdvak = "Morning";
    }
    if($date >= "12:00:00" && $date <= "18:00:00"){
        echo '    <style>body{ background-image: url("afternoon.png");} </style>';
        $tijdvak = "Afternoon";
    }
    if($date >= "18:00:00" && $date <= "24:00:00"){
        echo '    <style>body{ background-image: url("evening.png");} </style>';
        $tijdvak = "Evening";
    }
    if($date >= "00:00:00" && $date <= "06:00:00"){
        echo '    <style>body{ background-image: url("night.png");} </style>';
        $tijdvak = "Night";
    }
        echo"<div class = text> Good ". $tijdvak ."! </div>";
        echo"<div class = text2> Het is ". $date ."</div>";
    ?>
</body>
</html>