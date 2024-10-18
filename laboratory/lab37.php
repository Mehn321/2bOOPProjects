<?php
    if(isset($_POST["submit"])){
        $grade=$_POST["grade"];
        if($grade>=90 && $grade<=100){
            echo "excellent";
        }
        elseif($grade>=85 && $grade<=89){
            echo "Good";
        }
        elseif($grade>=80 && $grade<=84){
            echo "Fair";
        }
        elseif($grade>=75 && $grade<=79){
            echo "Poor";
        }
        elseif($grade>=60 && $grade<=74){
            echo "Fail";
        }
        else{
            echo "Invalid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="grade">
        <input type="submit" name="submit">
    </form>
</body>
</html>