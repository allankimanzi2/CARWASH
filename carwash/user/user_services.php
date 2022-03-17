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
    <title>Services - Top Touch Car Wash</title>
</head>
<body>

    <?php
    $sql = "SELECT * FROM services";
    $result = $connect->query($sql);
    ?>

    <main>
        <table>
            <tr>
                <th>Service No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Cost</th>
            </tr>
            <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr>" .
                "<td>" . $row["service_no"] . "</td>" .
                "<td>" . $row["name"] . "</td>" .
                "<td>" . $row["description"] . "</td>" .
                "<td>" . $row["cost"] . "</td>" .
                "</tr>";
                }
            }
            ?>
        </table>
    </main>
</body>
</html>