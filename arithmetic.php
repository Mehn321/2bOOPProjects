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

        <button name="submit">sum</button>


    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "the sum of $num1 and $num2 is ", $num1+$num2,"<br>";
        echo "the difference of $num1 and $num2 is ", $num1-$num2,"<br>";
        echo "the product of $num1 and $num2 is ", $num1*$num2,"<br>";
        echo "the qoutient of $num1 and $num2 is ", $num1/$num2,"<br>";
    }
?>