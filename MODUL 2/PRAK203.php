<!DOCTYPE html> 
<html> 
<head>     
    <title>Praktikum 2 - Nomor 3</title> 
</head> 
<body>     
    <form  method= "post">         
        <label for =" ">Nilai: </label>          
        <input type = "text" name ="nilai"><br>         
        <label for = "">Dari :</label></br>             
            <input  type  =  "radio"  name  =  'suhu1'  Value  = "C">Celcius<br>             
            <input  type  =  "radio"  name  =  'suhu1'  Value  = "F">Fahrenheit<br>             
            <input  type  =  "radio"  name  =  'suhu1'  value  = "R">Rheamur<br>             
            <input  type  =  "radio"  name  =  'suhu1'  value  = "K">Kelvin<br>         
        <label for = "">Ke :</label><br>             
            <input  type  =  "radio"  name  =  'suhu2'  value  = "C">Celcius<br>             
            <input  type  =  "radio"  name  =  'suhu2'  value  = "F">Fahrenheit<br>             
            <input  type  =  "radio"  name  =  'suhu2'  value  = "R">Rheamur<br>             
            <input  type  =  "radio"  name  =  'suhu2'  value  = "K">Kelvin<br>             
            <input  type  =  "submit"  name  =  "Submit"  value  = "Konversi">     
    </form>     
    <?php     
    $Suhu = $dari = $ke = NULL;     
    if($_SERVER ["REQUEST_METHOD"]=="POST"){         
        if(isset($_POST['nilai'])){             
            $Suhu = $_POST['nilai'];         
        }         
        if(isset($_POST['suhu1'])){             
            $dari = $_POST['suhu1'];         
        }         
        if(isset($_POST['suhu2'])){             
            $ke = $_POST['suhu2'];         
        }     
    }
        if($dari == "C" && $ke == "F"){             
            $nilai = (9/5 * $Suhu)+32;             
            echo "<h2>Hasil Konversi: $nilai &degF</h2>";         
        }         
        elseif($dari == "C" && $ke == "R"){             
            $nilai = (4/5 * $Suhu);             
            echo "<h2>Hasil Konversi: $nilai &degR</h2>";         
        }         
        elseif($dari == "C" && $ke == "K"){             
            $nilai = ($Suhu + 273);             
            echo "<h2>Hasil Konversi: $nilai &degK</h2>";         
        }         
        elseif($dari == "C" && $ke == "C"){                   
            echo  "<h2>Tidak  Bisa  Mengkonversi  Nilai Suhu</h2>";         
        }         
        elseif($dari == "F" && $ke == "C"){             
            $nilai = 5/9 * ($Suhu - 32);             
            echo "<h2>Hasil Konversi: $nilai &degC</h2>";         
        }         
        elseif($dari == "F" && $ke == "R"){             
            $nilai = 4/9 * ($Suhu - 32);             
            echo "<h2>Hasil Konversi: $nilai &degR</h2>";         
        }         
        elseif($dari == "F" && $ke == "K"){             
            $nilai = (($Suhu - 32)*5/9) + 273 ;             
            echo "<h2>Hasil Konversi: $nilai &degK</h2>";         
        }         
        elseif($dari == "F" && $ke == "F"){                   
            echo  "<h2>Tidak  Bisa  Mengkonversi  Nilai Suhu</h2>";         
        }         
        elseif($dari == "R" && $ke == "C"){             
            $nilai = (5/4 * $Suhu);             
            echo "<h2>Hasil Konversi: $nilai &degC</h2>";         
        }         
        elseif($dari == "R" && $ke == "F"){             
            $nilai = (9/4 * $Suhu)+32;             
            echo "<h2>Hasil Konversi: $nilai &degF</h2>";         
        }         
        elseif($dari == "R" && $ke == "K"){             
            $nilai = (5/4 * $Suhu)+273;             
            echo "<h2>Hasil Konversi: $nilai &degK</h2>";         
        }         
        elseif($dari == "R" && $ke == "R"){                   
            echo  "<h2>Tidak  Bisa  Mengkonversi  Nilai Suhu</h2>"; 
        }         
        elseif($dari == "K" && $ke == "C"){             
            $nilai = $Suhu - 273;             
            echo "<h2>Hasil Konversi: $nilai &degC</h2>";         
        }         
        elseif($dari == "K" && $ke == "F"){             
            $nilai = (9/5 *($Suhu - 273))+32;             
            echo "<h2>Hasil Konversi: $nilai &degF</h2>";         
        }             
        elseif($dari == "K" && $ke == "R"){             
            $nilai = 4/5 * ($Suhu-273);             
            echo "<h2>Hasil Konversi: $nilai &degR</h2>";         
        }         
        elseif($dari == "K" && $ke == "K"){                   
            echo  "<h2>Tidak  Bisa  Mengkonversi  Nilai Suhu</h2>";         
        }     
    ?> 
</body> 
</html> 