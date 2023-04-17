<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">     
    <title>Praktikum Web II - Soal 2</title>     
    <style>         
        tr{
            border: black;
        }
        table{
            border-collapse: collapse;
        }
    </style> 
</head>
<body>
    <?php     
    $datamhs = [         
        ["nama"  =>  "Andi",  "nim"  =>  "2101001",  "uts"  =>  87, "uas" => 65],         
        ["nama"  =>  "Budi",  "nim"  =>  "2101002",  "uts"  =>  76, "uas" => 79],         
        ["nama"  =>  "Tono",  "nim"  =>  "2101003",  "uts"  =>  50, "uas" => 41],
        ["nama"  =>  "Jessica",  "nim"  =>  "2101004",  "uts"  => 60, "uas" => 75],     
        ];      
        for ($i=0; $i < count($datamhs); $i++) {          
            $datamhs[$i]["akhir"]  =  $datamhs[$i]["uts"]  *  0.4  + $datamhs[$i]["uas"] * 0.6;         
            if($datamhs[$i]["akhir"] >= 80){             
                $datamhs[$i]["huruf"] = "A";         
            }elseif($datamhs[$i]["akhir"] > 70){             
                $datamhs[$i]["huruf"] = "B";         
            }elseif($datamhs[$i]["akhir"] > 60){             
                $datamhs[$i]["huruf"] = "C";         
            }elseif($datamhs[$i]["akhir"] > 50){             
                $datamhs[$i]["huruf"] = "D";         
            }else{             
                $datamhs[$i]["huruf"] = "E";         
            }     
        }  
    ?>
    <table border="1",cellspacing="15" cellpadding ="15">
            <tr bgcolor="CCCDCC">
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr> 
            <?php         
            for ($i=0; $i < count($datamhs); $i++) {              
                echo "<tr>";             
                echo "<td>".$datamhs[$i]["nama"]."</td>";             
                echo "<td>".$datamhs[$i]["nim"]."</td>";             
                echo "<td>".$datamhs[$i]["uts"]."</td>";             
                echo "<td>".$datamhs[$i]["uas"]."</td>";             
                echo "<td>".$datamhs[$i]["akhir"]."</td>";             
                echo "<td>".$datamhs[$i]["huruf"]."</td>";             
                echo "</tr>";         
                }                
            ?>     
    </table>                  
</body>
</html>