<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Touch Car Wash</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/navbar.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="home.php"><img src="../resources/images/rectangularlogo.png"></a>
        </div>
        <nav>
            <ul>
                <li><a href="" class="active">home</a></li>
                <li><a href="user_services.php">services</a></li>
                <li><a href="">billing</a></li>
                <li><a href="">records</a></li>
                <li class = "logout"><a href="../logout.php">log out</a></li>
            </ul>
        </nav>
    </header>
    <h1>USER HOME</h1>
    <?php echo $_SESSION["username"] ?>
</body>

</html>