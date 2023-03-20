<!-- PHP -->
<?php
$ListSamsungGalaxy = ['Samsung   Galaxy   S22',   'Samsung   Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
?>
<!-- HTML -->
<!DOCTYPE html><html lang="en">
    <head>
    <title>Praktikum Web 2 - Nomor 4</title>    
    <!-- Css -->    
    <style> 
    .Samsung {            
        font-weight: bold;
    }
    </style>
    </head>
    <body>
        <table border="1">
            <tr>                        
                <td class="Samsung">Daftar Smartphone Samsung</td>        
            </tr>        
            <tr>            
                <td><?php echo $ListSamsungGalaxy[0]; ?></td>        
            </tr>        
            <tr>
                <td><?php echo $ListSamsungGalaxy[1]; ?></td>        
            </tr>        
            <tr>            
                <td><?php echo $ListSamsungGalaxy[2]; ?></td>        
            </tr>        
            <tr>            
                <td><?php echo $ListSamsungGalaxy[3]; ?></td>        
            </tr>    
        </table>
    </body>
</html>