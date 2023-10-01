<?php 
require_once('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
</head>
<style>
.hide{
    display: none;
}
</style>
<body>
    <div id="mainDiv">
        <a href="index.php" id="indexA">My Index Page</a><br>
        <a href="register.php">Register Page</a><br>
    </div>
    <?php 
       $sql = "SELECT * FROM users";
       $result = $conn->query($sql);
       
       if ($result->num_rows > 0) {
        echo '<table class="table">';
         // output data of each row
         echo '<thead>
                <th>Username</th>
                <th>Name</th>
                <th>Sex</th>
              </thead>';
         while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $username = $row['username'];
            $sex = $row['sex'];
            $name = $row['name'];
            if($sex=='M'){
                $sex = 'Male';
            }else{
                $sex = 'Female';
            }
            echo '<tr id="user'.$id.'">
                    <td><label>'.$username.'</label></td>
                    <td><label>'.$name.'</label></td>
                    <td><label>'.$sex.'</label></td>
                    <td><a href="users_update.php?id='.$id.'"
                        class="btn btn-info">Edit</a></td>
                    <td>
                        <form action="users_update.php" method="GET">
                            <input type="hidden" name="id" value="'.$id.'">
                            <button class="btn btn-info" type="submit">
                                Edit</button>
                        </form>
                    </td>
                    <td>
                        <button class="btn btn-danger delete-user"
                            data-id="'.$id.'">Delete</button>
                        <div class="hide delete-options" id="options'.$id.'"><br>
                            <label>Are you sure you want to delete?</label>
                            <button class="btn btn-success delete-submit" 
                                data-id="'.$id.'"
                                data-val="Yes">Yes</button>
                            <button class="btn btn-danger delete-submit" 
                                data-id="'.$id.'"
                                data-val="No">No</button>
                        </div>
                    </td>
                 </tr>';
            
         }
         echo '</table>';
       } else {
         echo "0 results";
       }
       $conn->close();
            

            
    ?>
    <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/users.js"></script>
</body>
</html>