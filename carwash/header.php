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
                <li><a class="logout" href="../logout.php">log out</a></li>
            </ul>
        </nav>
        <p><?php  echo "<p class='username'>Active User: " . $_SESSION["username"]. "</p>"?></p>    
    </header>