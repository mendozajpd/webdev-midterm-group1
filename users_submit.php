<?php 
require_once('db_connection.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
            
    $sql = "UPDATE users SET `username` = '$username',
                             `name` = '$name',
                             `sex` = '$sex'
        WHERE `id` = '$id'";

    if ($conn->query($sql) === TRUE) {
        header('location:users.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }        

    $conn->close();
}else{
    header('location:users.php');
}
if(isset($_POST['submit_delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>