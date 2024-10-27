<?php   
    if(isset($_POST['logout'])) {
        header("Location: index.php");
    }
    include("database.php");
    $accounts=retrieve("*","accounts",true);

    if(isset($_POST["submit"])){
        $id_number = $_POST['id_number'];
    
        if($_POST["first_name"]!=NULL){
            $first_name=$_POST['first_name'];
            // $sql="UPDATE accounts SET first_name='$first_name' WHERE id_number='$id_number'";
            // $conn->query($sql);
            update("accounts","first_name='$first_name'","id_number='$id_number'");
        }
        if($_POST["last_name"]!=NULL){
            $last_name=$_POST['last_name'];
            // $sql="UPDATE accounts SET last_name='$last_name' WHERE id_number='$id_number'";
            // $conn->query($sql);
            update("accounts","last_name='$last_name'","id_number='$id_number'");
        }
        if($_POST["id_num"]!=NULL){
            echo"okay";
            $id_num=$_POST["id_num"];
            // $sql="UPDATE accounts SET last_name='$last_name' WHERE id_number='$id_number'";
            // $conn->query($sql);
            update("accounts","id_number='$id_num'","id_number='$id_number'");
        }
        if($_POST["email"]!=NULL){
            $email=$_POST['email'];
            // $sql="UPDATE accounts SET email='$email' WHERE id_number='$id_number'";
            // $conn->query($sql);
            update("accounts","email='$email'","id_number='$id_number'");
        }
        if($_POST["username"]!=NULL){
            $username=$_POST['username'];
            // $sql="UPDATE accounts SET username='$username' WHERE id_number='$id_number'";
            // $conn->query($sql);
            update("accounts","username='$username'","id_number='$id_number'");

        }
        if($_POST["password"]!=NULL){
            $password=$_POST['password'];
            // $sql="UPDATE accounts SET password='$password' WHERE id_number='$id_number'";
            // $conn->query($sql);
            update("accounts","password='$password'","id_number='$id_number'");

        }
        header("Location: dashboard.php");
        mysqli_close($conn);
    }

    if(isset($_POST["delete"])){
        $id_number = $_POST['id_number'];
        delete("accounts","id_number='$id_number'");
        header("Location: dashboard.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h2>All Accounts</h2>

        <div class="logout-container">
            <form action="" method="post">
                <button name="logout" value="logout">Log Out</button>
            </form>
        </div>
        </nav>

    </header>
    <div class="container">
    <table>
            <tr class="row-border">
                <th>Last Name</th>
                <th>First Name</th>
                <th>Id Number</th>
                <th>email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php
                while($row=$accounts->fetch_assoc()){
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $id_number = $row['id_number'];
                    $email = $row['email'];
                    $username=$row['username'];
                    $password=$row['password'];
                    if(isset($_POST["$id_number"])){
                        echo "
                        <tr class='row-border'>
                        <form action='dashboard.php' method='post'>
                        <td>
                            $last_name
                            <input type='text' name='last_name'>
                        </td>
                        <td>
                            $first_name
                            <input type='text' name='first_name'>
                        </td>
                        <td>
                            $id_number
                            <input type='number' name='id_num'>
                        </td>
                        <td>
                            $email
                            <input type='email' name='email'>
                        </td>
                        <td>
                            $username
                            <input type='text' name='username'>
                        </td>
                        <td>
                            $password
                            <input type='text' name='password'>
                            
                        </td>
                        <td>
                            <input type='hidden' name='id_number' value=$id_number>
                            <input type='submit' name='submit' value='submit'>
                            
                        </td>
                        </form>
                    </tr>
                    ";
                    }
                    else{
                        echo "
                        <tr class='row-border'>
                        <td>$last_name</td>
                        <td>$first_name </td>
                        <td>$id_number</td>
                        <td>$email</td>
                        <td>$username</td>
                        <td>$password</td>
                        <form action='dashboard.php' method='post'>
                        <td>
                            <input type='submit' name='$id_number' value='edit'>
                            <input type='submit' name='delete' value='delete'>
                            <input type='hidden' name='id_number' value=$id_number>
                        </td>
                        </form>
                    </tr>
                    
                    ";
                    }
                }
            ?>
        </table>
    </div>

</body>
</html>

<?php

?>
