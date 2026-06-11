<?php
    $pay_rate = (filter_input(INPUT_POST, 'pay_rate'));
    $hours = (filter_input(INPUT_POST, 'hours'));
    $estimated_tax = (filter_input(INPUT_POST, 'tax_rate'));
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