<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">num1</label>
        <input type="number" name="num1">
        <label for="">num2</label>
        <input type="number" name="num2"><br>

        <button name="sum">sum</button>
        <button name="difference">difference</button>
        <button name="product">product</button>
        <button name="qoutient">qoutient</button>


    </form>
</body>
</html>

<?php
    if(isset($_POST['sum'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "the sum of $num1 and $num2 is ", $num1+$num2;
    }
    elseif(isset($_POST['difference'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "the difference of $num1 and $num2 is ", $num1-$num2;
    }
    elseif(isset($_POST['product'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "the product of $num1 and $num2 is ", $num1*$num2;
    }
    elseif(isset($_POST['qoutient'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "the qoutient of $num1 and $num2 is ", $num1/$num2;
    }
?>