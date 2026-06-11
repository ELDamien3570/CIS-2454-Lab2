<?php
    $pay_rate = $_GET['pay_rate'];
    $hours = $_GET['hours'];
    $estimated_tax = $_GET['estimated_tax'];
?>

<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8"
    </head>
    <body>
        <form action ="index.php" method ="get">
            <label>Pay Rate: </label>
            <input type="text" name="pay_rate"/><br>
            
            <label>Hours: </label>
            <input type="text" name="hours"/><br>
            
            <label>Estimated Tax %: </label>
            <input type="text" name="estimated_tax"/><br>      
            
            <input type="submit" value="Calculate"/><br>
        </form>
        
        <?php
        echo "Estimated pay is " . ($pay_rate * $hours) * (1 - ($estimated_tax/100));
        ?>
        
        
    </body>
</html>


