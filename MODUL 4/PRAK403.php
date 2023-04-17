<!DOCTYPE html>
<html lang="en">
<head>     
    <style>         
        tr{
            border: black;
        }
        table{
            border-collapse: collapse;
        }    
    </style>     
            <meta charset="UTF-8">     
            <meta http-equiv="X-UA-Compatible" content="IE=edge">     
    <title>Praktikum Web II - Soal 3</title> 
</head>
<body>
    <?php     
        $datamhs = [         
            ["no" => 1, "nama" => "Ridho",          
            "matkul" => [             
                ["nama_mk" =>"Pemrograman I", "sks" => 2],              
                ["nama_mk"  =>  "Praktikum  Pemrograman  I",  "sks"  => 1],             
                ["nama_mk"  =>  "Pengantar  Lingkungan  Lahan  Basah", "sks" => 2],              
                ["nama_mk" => "Arsitektur Komputer", "sks" => 3]         
            ]         
            ],          
            ["no" => 2, "nama" => "Ratna",          
            "matkul" => [             
                ["nama_mk" =>"Basis Data I", "sks" => 2],              
                ["nama_mk"  =>  "Praktikum  Basis  Data  I",  "sks"  => 1],             
                ["nama_mk" => "Kalkulus", "sks" => 3]         
            ]         
            ],          
            ["no" => 3, "nama" => "Tono",          
            "matkul" => [             
                ["nama_mk"  =>  "Rekayasa  Perangkat  Lunak",  "sks"  => 3],              
                ["nama_mk"  =>  "Analisis  dan  Perancangan  Sistem", "sks" => 3],             
                ["nama_mk" => "Komputasi Awan", "sks" => 3],              
                ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]         
            ]         
            ]     
            ];      
        for ($i=0; $i < count($datamhs); $i++) {         
            $jmlSks = 0;         
            for ($j=0; $j < count($datamhs[$i]["matkul"]); $j++) {              
                $jmlSks += $datamhs[$i]["matkul"][$j]["sks"];         
            }         
            $datamhs[$i]["jmlSks"] = $jmlSks;         
            if ($datamhs[$i]["jmlSks"] < 7) {             
                $datamhs[$i]["keterangan"] = "Revisi KRS";         
            } else {             
                $datamhs[$i]["keterangan"] = "Tidak Revisi";         
            }     
        }
    ?>  
     <table border="1",cellspacing="5" cellpadding ="5">
        <tr bgcolor="CCCDCC">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr> 
        <?php            
            for ($i=0; $i < count($datamhs); $i++) {                 
                for  ($j=0;  $j  <  count($datamhs[$i]["matkul"]); $j++) {                     
                    echo "<tr>";                  
                        if ($j == 0) {
                            echo "<td>".$datamhs[$i]["no"]."</td>";                         
                            echo "<td>".$datamhs[$i]["nama"]."</td>";                         
                            echo "<td>".$datamhs[$i]["matkul"][$j]["nama_mk"]."</td>";                         
                            echo "<td>".$datamhs[$i]["matkul"][$j]["sks"]."</td>";                         
                            echo "<td>".$datamhs[$i]["jmlSks"]."</td>";                     
                        if($datamhs[$i]["keterangan"]=="Revisi KRS"){                         
                            echo  "<td  style='background-color:red'>".$datamhs[$i]["keterangan"]."</td>";                                            
                        }                     
                        else{                         
                            echo  "<td  style='background-color:green'>".$datamhs[$i]["keterangan"]."</td>";
                        }
                        }else {                         
                            echo "<td></td>";                         
                            echo "<td></td>";                         
                            echo "<td>".$datamhs[$i]["matkul"][$j]["nama_mk"]."</td>";                         
                            echo "<td>".$datamhs[$i]["matkul"][$j]["sks"]."</td>";                         
                            echo "<td></td>";  
                            echo "<td></td>";                     
                        }                     
                    echo "</tr>";                 
                }             
            }         
        ?>     
    </table>
</body>
</html>