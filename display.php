<?php
    $pay_rate = htmlspecialchars(filter_input(INPUT_POST, 'pay_rate'));
    $hours = htmlspecialchars(filter_input(INPUT_POST, 'hours'));
    $estimated_tax = htmlspecialchars(filter_input(INPUT_POST, 'estimated_tax'));
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