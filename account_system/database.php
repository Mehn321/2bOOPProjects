<?php
    function connect(){
        $server="localhost";
        $username = "root";
        $password="";
        $db_name="school";
        $conn = mysqli_connect($server,$username,$password,$db_name);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
    
    function insert($table, $columns, $data) {
        $conn = connect();
        $sql = "INSERT INTO $table ($columns) VALUES ($data)";
        if($conn->query($sql)==true){
            exit;
        } else {
            die("Error: " . $conn->error);
        }
    }

    function retrieve($column, $table, $where=true){
        $conn=connect();
        $sql="SELECT $column FROM $table WHERE $where";
        $result=$conn->query($sql);
        $conn->close();
        return $result;
    }

    // Update function
    function update($table, $set, $where) {
        $conn = connect();
        $sql = "UPDATE $table SET $set WHERE $where";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    // Delete function
    function delete($table, $where) {
        $conn = connect();
        $sql = "DELETE FROM $table WHERE $where";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

?>