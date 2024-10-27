<?php
    include("database.php");
    if(isset($_POST['submit'])){
        $conn = connect();
        $id_number = $_POST['id_number'];
        $result = retrieve("*", "accounts");
        while($row = $result->fetch_assoc()){
            $id_num=$row['id_number'];
            $pass=$row['password'];
            if($id_number==$id_num){
                echo "id number already existed";
                echo "<p>Already have an account? <a href='index.php'>Login</a></p>";
                exit;
            }
        }
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $insert="INSERT INTO `accounts`(`first_name`, `last_name`, `id_number`, `email`, `username`, `password`) VALUES ('$first_name','$last_name','$id_number','$email','$username','$password')";
        if($conn->query($insert)==TRUE){
            header("Location: index.php");
            exit;
        } else {
            die("Error: " . $conn->error);
        }
        // insert("accounts","`first_name`, `last_name`, `id_number`, `email`, `username`, `password`","'$first_name','$last_name','$id_number','$email','$username','$password'");
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
</head>

<body>
    <h2>SIGN UP</h2>
    <form action="signup.php" method="post">
        <div class="input-box">
        <input type="text" name="first_name" placeholder="first name" required>
        </div>
        <div class="input-box">
            <input type="text" name="last_name" placeholder="last name " required>
        </div>
        <div class="input-box">
            <input type="number" name="id_number" placeholder="id number" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="email" required>
        </div>
        <div class="input-box">
            <input type="text" name="username" placeholder="username" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="create password" required>
        </div>
        <br>  
        <button type="submit" name="submit"
        class="btn">Submit</button>

    </form>
    <p>Already have an account? <a href="index.php">Login</a></p>

</body>

</html>

