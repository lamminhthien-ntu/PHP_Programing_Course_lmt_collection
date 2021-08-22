<form action="building_better_calculator.php" method="post">
    First Num:<input type="number" step="0.001" name="num1"> <br>
    OP: <input type="text" name="op"> <br>
    Second Num:<input type="number" step="0.001" name="num2"> <br>
    <input type="submit">
</form>

<?php
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $op= $_POST['op'];

    switch ($op) {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        default:
            echo "Toán hạng không hợp lệ";
            
        
    }


?>