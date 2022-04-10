<?php
include '../db_connect.php';
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
    <title>Analytics - Top Touch Car Wash</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/admin/analytics.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        <?php
        include 'analytics/chart_1.php';
        ?>
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo "['".$name1."',".$service1."],";?>
          <?php echo "['".$name2."',".$service2."],";?>
          <?php echo "['".$name3."',".$service3."],";?>
          <?php echo "['".$name4."',".$service4."],";?>
          <?php echo "['".$name5."',".$service5."],";?>
          <?php echo "['".$name6."',".$service6."],";?>
          <?php echo "['".$name7."',".$service7."],";?>
          <?php echo "['".$name8."',".$service8."],";?>
          <?php echo "['".$name9."',".$service9."],";?>
          <?php echo "['".$name10."',".$service10."],";?>
        ]);

        var options = {
          title: 'SERVICE POPULARITY'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work',     11],
        ['Eat',      2],
        ['Commute',  2],
        ['Watch TV', 2],
        ['Sleep',    7]
        ]);

        var options = {
        title: 'My Daily Activities 2'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
        }
    </script>
</head>

<body>
    <?php
    include "../adminheader.php";
    
    ?>
    <main class="main-container">
        <div class="main-container">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <div id="piechart2" style="width: 900px; height: 500px;"></div>
        </div>
    
    </main>
</body>

</html>