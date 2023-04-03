<!DOCTYPE html> 
<html> 
<head>   
    <style>
    span {       
        color: red;     
    }   
    </style>     
    <title>Praktikum 2 - Nomor 2</title> 
</head> 
<body> 
<?php     
    $namaerr = $nimerr = $kelaminerr = NULL;     
    $nama = $nim = $kelamin = NULL;     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {         
        if (empty($_POST["nama"])) {           
            $namaerr = " nama tidak boleh kosong";         
        } else {           
            $nama = $_POST["nama"];         
        }         
        if (empty($_POST["nim"])) {           
            $nimerr = " nim tidak boleh kosong";         
        } else {           
            $nim = $_POST["nim"];         
        }         
        if (empty($_POST["jeniskelamin"])) {           
            $kelaminerr = " jenis kelamin tidak boleh kosong";         
        } else {           
            $kelamin = $_POST["jeniskelamin"];         
        }              
    } 
?>     
    <form method = "POST" >         
        <label for = " ">Nama: </label>         
        <input type = "text" name = 'nama' >
            <span>*<?php echo $namaerr;?></span></br>         
        <label for = " ">Nim: </label>         
        <input type = "text" name = 'nim'>             
            <span>*<?php echo $nimerr;?></span></br>         
        <label for = " ">Jenis Kelamin: </label>             
            <span>*<?php echo $kelaminerr;?></span></br>         
        <input type = "radio" name = 'jeniskelamin' value = "Laki-Laki">Laki-Laki<br>             
            <input  type  =  "radio"  name  =  'jeniskelamin'  value  = "Perempuan">Perempuan</br></br>                               
        <input type ="submit" name= "kirim" value ="Submit">     
    </form>     
    <?php     
    if(empty($namaerr) && empty($nimerr) && empty($kelaminerr)){         
        echo "$nama<br>";         
        echo "$nim<br>";         
        echo "$kelamin<br>";     
    }     
    ?> 
</body> 
</html>