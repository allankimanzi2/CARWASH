<?php

require 'db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="SELECT * FROM privileges WHERE username = '".$username."' AND password = '".$password."'";

    $result=mysqli_query($connect,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	
		$_SESSION["username"]=$username;

		header("location:user/home.php");
	}

	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;
		
		header("location:admin/home.php");
	}

	else
	{
		echo "username or password incorrect";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Top Touch</title>
    <link rel="stylesheet" href="resources/css/login.css">
</head>

<body>
    <main>
        <form action = "#" method = "POST">
            <div class="logo-container"><a href="index.php"><img class="logo" src="resources/images/logo.png"
                        alt="a photo of a water droplet with a car inside it and the words top touch carwash beside it"></a>
            </div>
            <div class="form-input"><label for="username"><input type="text" name="username" required
                        placeholder="Username"></label></div>
            <div class="form-input"><label for="password"><input type="password" name="password" required
                        placeholder="Password"></label>
            </div>
            <div class="form-iput submit-button"><input type="submit" name="submit-button"></div>
        </form>
    </main>
</body>

</html>