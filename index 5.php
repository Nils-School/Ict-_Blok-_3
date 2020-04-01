<?php
    $string = "Schaken";
    // false is nee en true is ja
    $boolean = TRUE;
    $integer = 2;

    if ($string === "yathzee"){
        if ($boolean == TRUE){
            if ($integer <= 30 && $integer >= 15){
                echo"Je wilt Yathzee spelen want je hebt tussende 15 en 30 minuten tijd";
            }
            elseif($integer >= 30){
                echo"Je wilt Yathzee   dat vindt je gewoon leuk";
            }
        }
        elseif($boolean == FALSE){
            if ($integer >=100){
                echo"Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien";
        }
        elseif($integer <=100){
            echo"Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
        }
    }
    }
    elseif ($string === "Monopoly"){
        if ($boolean == TRUE){
        if($integer == 1){
            echo"Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg";
        }
        elseif($integer >=1){
            echo"Je wilt Monopoly spelen want je houd ervan omiedereen blut te maken";
        }
        elseif ($boolean == FALSE){
            if($integer =2 &&  $integer >120){
                echo"Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
            }
            else{
                echo"Je wilt Monopoly niet spelen want je houd niet van hotels";
            }
        }
    }
}
    elseif($string === "Schaken"){
        if ($boolean == TRUE){
            if($integer =2){
                echo"Je wilt Schaken want je vindt zwart en wit leuk";
            }
            if($integer <>2 ){
                echo"Je wilt Schaken wantje denkt slimmer dan mij te zijn";
            }
        }
        if ($boolean == FALSE){
            if($integer = -1){
                echo"Je wilt echt niet Schaken";
            }
            else{
                echo"Je wilt gewoon niet Schaken";
            }
        }
    }
?>