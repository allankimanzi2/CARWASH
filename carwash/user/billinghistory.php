<?php
include '../db_connect.php';
if(!isset($_SESSION["username"])){
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing History - Top Touch Car Wash</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/user/billinghistory.css">
</head>

<body>

    <?php
    include "../userheader.php";
    ?>

    <main>
        
    </main>
</body>

</html>