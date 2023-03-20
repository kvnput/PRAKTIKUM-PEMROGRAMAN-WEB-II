<!-- Script PHP -->
<?php
$ListSamsung   =   ['SG22'=>'Samsung Galaxy S22','SG22+'=>'Samsung Galaxy S22+', 'SGA03'=>'Samsung Galaxy A03', 'SGX5'=>'Samsung Galaxy Xcover 5'];
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="UTF-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <title>Praktikumweb2 - Nomor5</title>    
        <!-- Css -->    
        <style>
        .Samsung {            
            font-weight: 800;
            font-size: 25px;           
            background-color: red;            
            padding: 20px 0 20px 0;        
            }    
        </style>
    </head>
        <body>
            <table border="1">        
                <tr>
                    <td class="Samsung">Daftar Smartphone Samsung</td>
                </tr>        
                <tr>            
                    <td><?php echo $ListSamsung['SG22']; ?></td>        
                </tr>        
                <tr>            
                    <td><?php echo $ListSamsung['SG22+']; ?></td>        
                </tr>        
                <tr>            
                    <td><?php echo $ListSamsung['SGA03']; ?></td>        
                </tr>        
                <tr>            
                    <td><?php echo $ListSamsung['SGX5']; ?></td>        
                </tr>    
            </table>
        </body>
</html>