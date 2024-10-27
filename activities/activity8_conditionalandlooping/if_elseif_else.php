
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input your age:</label><br>
        <input type="number" name="age">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        $age=$_POST["age"];
        if ($age <= 1) {
            $stage = "Infancy";
        } elseif ($age > 1 && $age <= 3) {
            $stage = "Toddler";
        } elseif ($age > 3 && $age <= 12) {
            $stage = "Childhood";
        } elseif ($age > 12 && $age <= 18) {
            $stage = "Adolescence";
        } elseif ($age > 18 && $age <= 40) {
            $stage = "Adulthood";
        } elseif ($age > 40 && $age <= 65) {
            $stage = "Middle Age";
        } else {
            $stage = "Senior";
        }
        
        echo "You are in the $stage stage of life.";
    }
?>