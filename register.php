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
<div class="row">
        <a href="index.php">Index Page</a>
        <a href="users.php">Users Page</a><br><br>
        <div class="col-lg-6">
            <form action="register_submit.php" method="POST">
                <table class="table table-bordered">
                    <tr>
                        <td><label>Username</label></td>
                        <td><input type="text" class="form-control" name="username" 
                            placeholder="username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="name" placeholder="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Sex</label>
                            <label>Male</label>
                            <input type="radio" name="sex" value="M">
                            <label>Female</label>
                            <input type="radio" name="sex" value="F">
                        </td>
                    </tr>
                </table>
                <button class="btn btn-success" name="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>