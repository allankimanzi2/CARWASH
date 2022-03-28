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
    <title>Billing - Top Touch Car Wash</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/user/billing.css">
</head>

<body>

    <?php
    include "../userheader.php";
    if(isset($_POST['proceed'])) {
        $total = 0;

        if(isset($_POST['service_1'])) {
            $service1 = $_POST['service_1'];
            $total +=$service1;
        }
        if(isset($_POST['service_2'])) {
            $service2 = $_POST['service_2'];
            $total +=$service2;
        }
        if(isset($_POST['service_3'])) {
            $service3 = $_POST['service_3'];
            $total +=$service3;
        }
        if(isset($_POST['service_4'])) {
            $service4 = $_POST['service_4'];
            $total +=$service4;
        }
        if(isset($_POST['service_5'])) {
            $service5 = $_POST['service_5'];
            $total +=$service5;
        }
        if(isset($_POST['service_6'])) {
            $service6 = $_POST['service_6'];
            $total +=$service6;
        }
        if(isset($_POST['service_7'])) {
            $service7 = $_POST['service_7'];
            $total +=$service7;
        }
        if(isset($_POST['service_8'])) {
            $service8 = $_POST['service_8'];
            $total +=$service8;
        }
        if(isset($_POST['service_9'])) {
            $service9 = $_POST['service_9'];
            $service9 = intval( $service9 );
            $total +=$service9;
        }
        if(isset($_POST['service_10'])) {
            $service10 = $_POST['service_10'];
            $service10 = intval( $service10 );
            $total +=$service10;
        }
        
        $_SESSION['total'] = $total;

    }
    ?>

    <main>
        <?php if(isset($_SESSION['total'])){
            echo "<p class='invoice-title'>Invoice:</p>";
            echo "<table class='invoice-table'>";
                echo "<tr>" .
                "<th>Bill Details</th>" .
                "<th>Services Provided</th>" .
                "</tr>";
                echo "<tr>" .
                "<td>" . "Total Bill: " . $_SESSION['total'] . "</td>" .
                "<td>" . "service sdfsldfsjdfsdfsdflsdjfsdljfsdljsdjfljflsjdfjflsjfskdjfo" . "</td>" .
                "</tr>" . 
                "<tr>" . 
                "<td>Commission: 50/=</td>" .
                "</tr>";
            echo "</table>";

            //ECHO A FORM WITH HIDDEN INPUTS THAT WILL ONLY HAVE THE BUTTON FOR SUBMITTING VISSIBLE IN ORDER TO POST THE DATA 


            // echo "<p class='alert-success'>" . $_SESSION['total'] . "</p>";
            unset($_SESSION['total']);
        } 
        ?>
        <div class="register">
                <div class="title">Bill Customer</div>
                <form action="" method="POST" class="form">
                    <div class="inputfield">
                        <label>Date</label>
                        <input type="date" class="input" name="dateAdded" placeholder="dd/mm/yyyy" />
                    </div>
                    <div class="inputfield">
                        <label>Employee National Id</label>
                        <input type="number" class="input" name="phoneNo"  placeholder="Employee National Id" />
                    </div>    
                <div class="sub-title">Enter Customer Details</div>
                    <div class="inputfield">
                        <label>Plate No</label>
                        <input type="text" class="input" name="plateNo"  placeholder="Plate No" />
                    </div>
                    <div class="inputfield">
                        <label>Model</label>
                        <input type="text" class="input" name="model"  placeholder="Model" />
                    </div>
                    <div class="inputfield">
                        <label>colour</label>
                        <input type="text" class="input" name="colour"  placeholder="Colour" />
                    </div>
                    <div class="inputfield">
                        <label>Owner Name</label>
                        <input type="text" class="input" name="ownerName"  placeholder="Owner's Name" />
                    </div>
                    <div class="inputfield">
                        <label>Phone No</label>
                        <input type="number" class="input" name="phoneNo"  placeholder="Phone No" />
                    </div>
                    <div class="sub-title">Select Services</div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 1";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_1" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_1"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 2";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_2" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_2"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 3";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_3" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_3"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 4";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_4" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_4"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 5";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_5" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_5"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 6";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_6" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_6"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 7";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_7" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_7"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="inputfield-chk">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 8";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <input type="checkbox" class="input-chk" name="service_8" value="<?php echo $row['cost'] ?>"/>
                        <label for="service_8"><?php echo $row["name"] . " - " . $row['description'] . " @" . $row['cost'] . "/=" ?></label>
                    </div>
                    <div class="sub-title-special">Some services require manual cost entry when billing:</div>
                    <div class="inputfield-2">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 9";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <label for="service_9"><?php echo $row["name"] . " - " . $row['description']?></label>
                        <input type="number" class="input" name="service_9"  placeholder="Enter the service amount"/>
                    </div>
                    <div class="inputfield-2">
                        <?php 
                            $sql = "SELECT * FROM services WHERE service_no = 10";
                            $result = $connect->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <label for="service_10"><?php echo $row["name"] . " - " . $row['description']?></label>
                        <input type="number" class="input" name="service_10"  placeholder="Enter the service amount"/>
                    </div>
                    
                    <div class="inputBtn">
                        <input type="submit" value="Proceed>>>" class="btn" name="proceed" />
                        <input type="reset" value="Clear" class="btn" />
                    </div>
                </form>
            </div>
    </main>
</body>

</html>