<!-- PHP -->
<?php
$celcius= 37.841;
$fahrenheit=($celcius*9/5) +32; 
$reamur=($celcius*4/5); 
$kelvin=($celcius+273.15); 
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>     
        <title>Praktikum Web 2 - Nomor 3</title>
        </head>
        <body>
        <?php    
        echo "Fahrenheit (F) :".number_format($fahrenheit,4)."<br>";    
        echo "Reamur (R): ".number_format($reamur,4)."<br>";    
        echo "Kelvin (K) :".number_format($kelvin,4)."<br>";
        ?>
        </body>
</html>