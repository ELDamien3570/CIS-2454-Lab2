<?php
    $pay_rate = $_POST['pay_rate'];
    $hours = $_POST['hours'];
    $estimated_tax = $_POST['estimated_tax'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>  
        
        
        <?php
        echo "Estimated pay is " . ($pay_rate * $hours) * (1 - ($estimated_tax/100));
        ?>       
    </body>
</html>