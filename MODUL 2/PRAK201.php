<!DOCTYPE html> 
<html> 
    <head>     
        <title>Praktikum 2 - Nomor 1</title> 
    </head> 
    <body>     
        <form method="post">         
            <Label for = "">Nama: 1</Label>         
            <input type = "text" name ="Nama1"><br>         
            <Label for = "">Nama: 2</Label>         
            <input type = "text" name ="Nama2"><br>         
            <Label for = "">Nama: 3</Label>         
            <input type = "text" name ="Nama3"><br>         
            <input type = "Submit" value = "Urutkan">     
        </form>     
        <?php  $Nama1 = $Nama2 = $Nama3 = NULL;     
        if($_SERVER ["REQUEST_METHOD"]=="POST"){         
            if(isset($_POST['Nama1'])){             
                $Nama1 = $_POST['Nama1'];         
            }        
            if(isset($_POST['Nama2'])){    
                $Nama2 = $_POST['Nama2'];    
            }
            if(isset($_POST['Nama3'])){             
                $Nama3 = $_POST['Nama3'];         
            }         
            $NArray = array($Nama1,$Nama2,$Nama3);         
            if($NArray[0] > $NArray[1]){             
                $besar = $NArray[0];             
                $NArray[0] = $NArray[1];             
                $NArray[1] = $besar;         
            }         
            if($NArray[1] > $NArray[2]){          
                $besar = $NArray[1];          
                $NArray[1] = $NArray[2];          
                $NArray[2] = $besar;          
            }         
            if($NArray[1] < $NArray[0]){              
                $besar = $NArray[1];              
                $NArray[1] = $NArray[0];              
                $NArray[0] = $besar;         
            }         
            echo "$NArray[0]</br>";         
            echo "$NArray[1]</br>";         
            echo "$NArray[2]<br/>";     
        }     
        ?> 
</body> 
</html>