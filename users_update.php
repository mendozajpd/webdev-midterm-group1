<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>

<?php 
require_once('db_connection.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE `id` = '$id'";
    $result = $conn->query($sql);
       
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $name = $row['name'];
            $sex = $row['sex'];
            $checkedMale = 'checked';
            $checkedFeMale = '';
            if($sex=='F'){
                $checkedMale = '';
                $checkedFeMale = 'checked';
            }
        }
    }else{
        header('location:users.php');
    }
}else{
    header('location:users.php');
}
?>

    <div class="col-lg-6">
            <form action="users_submit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <table class="table table-bordered">
                    <tr>
                        <td><label>Username</label></td>
                        <td><input type="text" class="form-control" name="username"
                            value="<?php echo $username ?>"
                            placeholder="username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="name"
                            value="<?php echo $name ?>" placeholder="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Sex</label>
                            <label>Male</label>
                            <input type="radio" name="sex" value="M" <?php echo $checkedMale ?>>
                            <label>Female</label>
                            <input type="radio" name="sex" value="F" <?php echo $checkedFeMale ?>>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-success" name="update" type="submit">Submit</button>
            </form>
        </div>
</body>
</html>