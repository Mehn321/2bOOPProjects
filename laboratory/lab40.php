<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label for="">How many countries have you been to?</label>
        <input type="number" name="num" required>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST["num"];
        echo '<form action="" method="post">';
        echo '<label>Enter the countries you have been to:</label><br>';
        
        for ($i = 0; $i < $num; $i++) {
            echo "<input type='text' name='$i' required><br>";
        }
        
        echo '<input type="hidden" name="num" value="' . $num . '">';
        echo '<input type="submit" name="sub">';
        echo '</form>';
    }

    if (isset($_POST['sub'])) {
        $num = $_POST["num"];
        echo "you have been to: <br>";
        for ($i = 0; $i < $num; $i++) {
            $country = $_POST[$i];
            echo "$country<br>";
        }
    }
    ?>

</body>
</html>