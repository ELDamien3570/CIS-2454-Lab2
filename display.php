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
        
        $overtime_hours = 0;
        
        $regular_pay = 0;
        $gross_pay = 0;
        $overtime_pay = 0;

        
        if ($hours > 40){
            $overtime_hours = $hours - 40;
        }
        
        if ($overtime_hours > 0){
            $regular_pay = $pay_rate * 40;
            $overtime_pay = ($pay_rate * 1.5) * $overtime_hours;
            $gross_pay = $regular_pay + $overtime_pay;           
        }
        else
        {
            $regular_pay = $pay_rate * $hours;
            $gross_pay = $regular_pay;
        }                   
        
        $total_taxes = $gross_pay * ($estimated_tax/100);
        $net_pay = $gross_pay - $total_taxes;
        
        echo "~~~~~~~~~~~~~~~~</br>"
        . "<b>~~~ PAY STUB ~~~</b></br>"
        . "~~~~~~~~~~~~~~~~</br>"
        . "</br><b>Regular Pay:</b> $regular_pay </br> "
                . "<b>Overtime pay:</b> $overtime_pay </br>"
                . "<b>Gross pay:</b> $gross_pay </br>"
                . "<b>Total taxes:</b> $total_taxes </br>"
                . "<b>Net pay:</b> $net_pay </br>";
        
        ?>       
    </body>
</html>