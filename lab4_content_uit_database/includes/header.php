<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
<div class = "menu">
<?php
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
    <span class = "onderwerp1"><a href='<?php echo $actual_link?>?id=1'>onderwerp1</a></span>
    <span class = "onderwerp2"><a href='<?php echo $actual_link?>?id=2'>onderwerp2</a></span>
    <span class = "onderwerp3"><a href='<?php echo $actual_link?>?id=3'>onderwerp3</a></span>
    </div>
</body>
</html>
<?php ?>