
			
<div style="opacity:0.9;border-radius:10px;border:10px solid #ffffff;background-color:#ffffff">
<br><br>

<?php  
include('call.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Examp</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    var chart;
    
    $(document).ready(function () {
    	
    	// Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Crime Rate:'
              
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 0
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'Crime Rate',
                data: [
                    ['Total Cognizable Crimes - Male',   v1],
                    ['Total Cognizable Crimes - Female',   v2],
                    ['Murder - Male',    v3],
                    ['Murder - Female',    v4],
                    ['Culpable Homocide not amounting to murder - Male',     v5],
                    ['Culpable Homocide not amounting to murder - Female',   v6],
                    ['Rape - Male',    v7],
			
					['Rape - Female',   v8],
					['Kidnapping and Abduction - Male',    v9],
					['Kidnapping and Abduction - Female',   x1],
					['Dacoity - Male',   x2],
					['Dacoity - Female',   x3],
					['Robbery - Male',   x4],
					['Robbery - Female',  x5],
					['Burglary - Male',  x6],
					['Burglary - Female',   x7],
					
                    ['Theft - Male',  x8],
					
					['Theft - Female',  x9],
					['Riots - Male',  y1],
					['Riots - Female',   y2],
					['Criminal Breach of Trust - Male',   y3],
					['Criminal Breach of Trust - Female',  y4],
					['Cheating - Male',   y5],
					['Cheating - Female',  y6],
					['Counterfeiting - Male',  y7],
					['Counterfeiting - Female',  y8]
					
					
					
					
							
					
                ]
            }]
        });
    });
    
});
		</script>
	</head>
	<body>
	<!--<?//php echo $a8;?> -->
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

	

   <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script>window.jQuery || document.write("<script src='assets/js/jquery-1.8.3.min.js'>\x3C/script>")</script>

   <!--[if IE 7]>
   <script type="text/javascript" src="assets/js/bootmetro-icons-ie7.js">
   <![endif]-->

 