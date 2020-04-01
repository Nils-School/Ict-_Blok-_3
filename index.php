<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- <h1>hello rompie</h1> -->
    <?php
    $randomgetal = (rand(1,10));
    $randomgetal2 = (rand(1,10));
    $eindgetal = $randomgetal + $randomgetal2;
    $eindgetal1 = $randomgetal - $randomgetal2;
    $eindgetal2 = $randomgetal * $randomgetal2;
    $eindgetal3 = $randomgetal / $randomgetal2;
    echo $randomgetal . " + " . $randomgetal2 . " = " . $eindgetal."<br>";
    echo $randomgetal . " - " . $randomgetal2 . " = " . $eindgetal1."<br>";
    echo $randomgetal . " x " . $randomgetal2 . " = " . $eindgetal2."<br>";
    echo $randomgetal . " : " . $randomgetal2 . " = " . $eindgetal3."<br>";

//     tafel(6);
    function tafel($nummer){
    
        
    for ($a = 1; $a <= 10; $a++) {

        $antwoord = $nummer * $a;
        echo $nummer . " x " . $a . " = " . $antwoord."<br>";

}
    }
    $nummer = [6,3,5,8,12];
    foreach ($nummer as $value) { 

    tafel($value);
    }
    
    // function tafel(){
        
    //     $nummer = [6,3,5,8,12];
    //             foreach ($nummer as $value) { 
    //                 for ($a = 1; $a <= 10; $a++) {
    //             $antwoord = $value * $a;
    //             echo $value . " x " . $a . " = " . $antwoord."<br>";
            
    //             } 
    //         }
    // }
    ?>
</body>
</html>