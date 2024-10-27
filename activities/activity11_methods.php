
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input first number:</label><br>
        <input type="number" name="num1"><br>
        <label for="">Input first number:</label><br>
        <input type="number" name="num2"><br>
        <input type="submit" name="add" value="add">
        <input type="submit" name="minus" value="minus">
        <input type="submit" name=" divide" value="divide">
        <input type="submit" name="multiply" value="multiply">
        
    </form>
</body>
</html>

<?php
    function add($num1,$num2){
        $result=$num1+$num2;
        return $result;
    }
    
    function minus($num1,$num2){
        $result=$num1-$num2;
        return $result;

    }
    
    function  divide($num1,$num2){
        $result=$num1/$num2;
        return $result;
    }

    
    function multiply($num1,$num2){
        $result=$num1*$num2;
        return $result;
    }

    
    if(isset($_POST["add"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        echo add($num1,$num2);
    }
    if(isset($_POST["minus"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        echo minus($num1,$num2);
    }
    if(isset($_POST["divide"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        echo divide($num1,$num2);
    }
    if(isset($_POST["multiply"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        echo multiply($num1,$num2);
    }
?>

