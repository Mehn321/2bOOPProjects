<?php
    include("database.php");
    if(isset($_POST['login'])){
        $id_number = $_POST['id_number'];
        $password = $_POST['password'];
        $result = retrieve("*", "accounts");
        while($row = $result->fetch_assoc()){
            $id_num=$row['id_number'];
            $pass=$row['password'];
            if($password==$pass && $id_number==$id_num){
                header("Location: dashboard.php");
            }
        }
        echo "incorrect id number or password";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="css/signup-in.css">
</head>
<body>
    <div class="wrapper">
        <h2>LOG IN</h2>
        <form action="index.php" method="post">
            <div class="input-box">
                <input type="text" name="id_number" placeholder="id number" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>