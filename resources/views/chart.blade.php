<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://www.google.com/jsapi"></script>
    <style>
        .pie-chart {
            width: 750px;
            height: 500px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
  
<h2 class="text-center">Welcome To HXM Product Chart View</h2>
  
<div id="chartDiv" class="pie-chart"></div>
  
<div class="text-center">
    <a href="{{ route('download') }}">Download PDF File</a>
    <h2>HXM Product</h2>
</div>
  
<script type="text/javascript">
    window.onload = function() {
        google.load("visualization", "1.1", {
            packages: ["corechart"],
            callback: 'drawChart'
        });
    };
  
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pizza');
        data.addColumn('number', 'Populartiy');
        data.addRows([
            ['Completed', 40],
            ['Pending', 25],
            ['Assigned', 20],
            ['CakePHP', 10],
            ['Slim', 5]
        ]);
  
        var options = {
            title: 'User Activities Framework',
            sliceVisibilityThreshold: .2
        };
  
        var chart = new google.visualization.PieChart(document.getElementById('chartDiv'));
        chart.draw(data, options);
    }
</script>
  
</body>
</html>