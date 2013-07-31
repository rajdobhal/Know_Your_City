<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">

   <title>Know Your City</title>

   <meta name="robots" content="index, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface." />
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   <link rel="author" href="https://plus.google.com/117689250782136016574/about">

   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="../../../assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="../../../assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="../../../assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="../../../assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="../../../assets/css/datepicker.css">

   <!--  these two css are to use only for documentation -->
   <link rel="stylesheet" type="text/css" href="../../../assets/css/site.css">

   <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="../../../assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../../../assets/ico/apple-touch-icon-57-precomposed.png">
  
   <!-- All JavaScript at the bottom, except for Modernizr and Respond.
      Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
      For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
   <script src="assets/js/modernizr-2.6.2.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
</head>

<body>
   <!--[if lt IE 7]>
   <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
   <![endif]-->

   <header id="hero" class="">
   
         <div class="jumbotron masthead">
            <div class="container-fluid">
               <div class="row-fluid">
                  <div class="inner span7">
                     <h1><b>Know Your City</b></h1>
                     <h2>An Application to get information of City</h2>
                     <p>An App which tells the government approved hotels, tour operators, rainfall condition and crime rate of your city.</p>
                    <!-- <p align="center">-->
                       <!-- <a class="btn btn-large btn-primary" href="https://github.com/aozora/bootmetro/zipball/master">
                           Download Now
                          <i class="icon-arrow-right-7"></i>
                        </a>
                        <span class="muted">it's free</span>
                        <br/>
                        <span class="label label-success">-->







<?php  
include('call.php');
?>




<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

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

	</body>
</html>
