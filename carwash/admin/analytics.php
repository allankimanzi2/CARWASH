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
        $defaultDate = '2022-03-29'; //SET TO THE FIRST DATE A BILLING RECORD WAS SAVED TO THE DATABASE

        if (isset($_POST["ok"])) {
            $startDate = $_POST['startdate'];
            $endDate = $_POST['enddate'];
            include 'analytics/chart_1.php';
            include 'analytics/chart_2.php';
        } else {
            include 'analytics/chart_1.php';
            include 'analytics/chart_2.php';
        }
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
          ['Hour', 'Sales in Ksh'],
          <?php for ($i=0; $i < 24 ; $i++) {
              if ($i == 23) {
                echo "['".$hourCh2[$i]."',".$totalCh2[$i]."]";
              } else {
                  if ($i < 10) {
                    echo "['0".$hourCh2[$i]."',".$totalCh2[$i]."],";
                  } else {
                    echo "['".$hourCh2[$i]."',".$totalCh2[$i]."],";
                  }
                
              }   
          }
          ?>
        ]);

        var options = {
          title: 'DAILY CAR WASH PERFOMANCE',
          curveType: 'function',
          legend: { position: 'bottom' },
          hAxis: {
          title: 'Hour (24 hour format)'
          },
          vAxis: {
          title: 'Sales in Ksh'
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>

<body>
    <?php
    include "../adminheader.php";
    
    ?>
    <main class="main-container">
        <div class="register">
            <div class="title">Enter a time period</div>
            <form action="" method="POST" class="form">
                <div class="inputfield">
                    <label>Start Date</label>
                    <input type="date" class="input" name="startdate" placeholder="mm/dd/yyyy" required/>
                </div>
                <div class="inputfield">
                    <label>End Date</label>
                    <input type="date" class="input" name="enddate" placeholder="mm/dd/yyyy" required/>
                </div>
                <div class="inputBtn">
                    <input type="submit" value="OK" class="btn" name="ok" />
                    <input type="reset" value="Clear" class="btn" />
                </div>
            </form>
        </div>
        <div class="main-container">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <div id="curve_chart" style="width: 900px; height: 500px"></div>
        </div>
    
    </main>
</body>

</html>