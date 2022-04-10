<?php

require 'db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST["username"];
    $password=$_POST["password"];

    $stmt = $connect->prepare("SELECT * FROM privileges WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($privilegeId, $empId, $uname, $pw, $userType);
    $row=$stmt->fetch();
    // $sql="SELECT * FROM privileges WHERE username = '".$username."' AND password = '".$password."'";

    // $result=mysqli_query($connect,$sql);

	// $row=mysqli_fetch_array($result);

	if($userType=="user")
	{	
		$_SESSION["username"]=$username;

		header("location:user/home.php");
	}

	elseif($userType=="admin")
	{
		$_SESSION["username"]=$username;
		
		header("location:admin/home.php");
	}

	else
	{
		echo "username or password incorrect!";
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
            <div class="logo-container"><a href="index.php"><img class="logo" src="resources/images/squarelogo.png"
                        alt="a photo of a water droplet with a car inside it and the words top touch carwash beside it"></a>
            </div>
            <div class="form-input"><label for="username"><input type="text" class="login-text-input" name="username" required
                        placeholder="Username"></label></div>
            <div class="form-input"><label for="password"><input type="password" class="login-text-input" name="password" required
                        placeholder="Password"></label>
            </div>
            <div class="form-iput submit-button"><input type="submit" class="form-submit-button" name="submit-button"></div>
        </form>
    </main>
</body>

</html>