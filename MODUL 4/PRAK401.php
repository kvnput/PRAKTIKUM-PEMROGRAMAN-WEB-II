<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">     
    <title>Praktikum Web II - Soal 1</title>     
    <style>         
    table, tr, td{             
        border: solid 1px black; 
        border-collapse: collapse;             
        padding: 15px;             
        text-align: center;         
        }
    </style> 
</head>
<body> 
    <?php     
    $panjang = "";     
    $lebar = "";     
    $nilai = "";      
    if (isset($_POST["submit"])) 
    {         
    $panjang = $_POST["panjang"];         
    $lebar = $_POST["lebar"];         
    $nilai = $_POST["nilai"];      
    } 
    ?>     
    <form action="" method="POST">         
        Panjang: <input type="text" name="panjang" value="<?=$panjang;?>"><br>         
        Lebar: <input type="text" name="lebar" value="<?=$lebar;?>"><br>         
        Nilai: <input type="text" name="nilai" value="<?=$nilai;?>"><br>         
        <input type="submit" name="submit" value="Cetak">     
    </form> 
     <?php         
        if (isset($_POST["submit"])){             
          $isi = explode(" ", $nilai);             
          $panjangNilai = count($isi);             
          if ($panjang * $lebar == $panjangNilai){                 
            $count = 0;                 
            for ($i=0; $i < $panjang; $i++) {                      
            for ($j=0; $j < $lebar; $j++) {                          
              $tampil[$i][$j] = $isi[$count];                         
              $count++;                     
            }                 
            }                 
             echo "<table>";                 
            for ($i=0; $i < $panjang; $i++) {                      
             echo "<tr>";                     
            for ($j=0; $j < $lebar; $j++) {                          
             echo "<td>".$tampil[$i][$j]."</td>";                     
            }                     
              echo "</tr>";                 
            }             
          }else {                 
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";             
          }         
        }
    ?> 
</body> 
</html>