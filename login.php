<?php
session_start();

if(isset ($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "database.php";
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($users){
        if(password_verify($password, $users["password"])){
            $_SESSION["users"] = $users;
            header("Location: home.php");
            die();
        } else {
            $errorMessage = "<div class = 'alert alert-danger'> Password does not match </div>";
        }
    } else {
        $errorMessage = "<div class = 'alert alert-danger'> Email does not match </div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="background"></div> <!-- Add the background element -->
<div class="container">
    <div class="box">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p> Don't have an account? <a href="registration.php">Create an account.</a></p>
    </div>
</div>

</body>
</html>
