
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Input a number from 1 to 7:</label><br>
        <input type="number" name="num">
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])){
        $day=$_POST["num"];
        switch ($day) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
            default:
                echo "Invalid input! Please enter a number between 1 and 7.";
                break;
        }
    }

?>