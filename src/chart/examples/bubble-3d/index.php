<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function() {
    $('#container').highcharts({

        chart: {
            type: 'bubble',
            plotBorderWidth: 1,
            zoomType: 'xy'
        },

        title: {
            text: 'Highcharts bubbles with radial gradient fill'
        },

        xAxis: {
            gridLineWidth: 1
        },

        yAxis: {
            startOnTick: false,
            endOnTick: false
        },

        series: [{
           
		   
		   data: [
                    ['1',   v1],
                    ['2',   v2],
                    ['3',    v3],
                    ['4',    v4],
                    ['5',     v5],
                    ['6',   v6],
                    ['7',    v7],
			
					['8',   v8],
					['9',    v9],
					['11',   x1],
					['12',   x2],
					['13',   x3],
					['14',   x4],
					['15',  x5],
					['16',  x6],
					['17',   x7],
					['18',  x8],
					
					['19',  x9],
					['21',  y1],
					['22',   y2],
					['23',   y3],
					['24',  y4],
					['25',   y5],
					['26',  y6],
					['27',  y7],
					['28',  y8]
					
		   
		   
            ],
            marker: {
                 fillColor: {
                     radialGradient: { cx: 0.4, cy: 0.3, r: 0.7 },
                     stops: [
                         [0, 'rgba(255,255,255,0.5)'],
                         [1, 'rgba(69,114,167,0.5)']
                     ]
                 }
            }
        }, {
            data: [
                [42, 38, 20],
                [6, 18, 1],
                [1, 93, 55],
                [57, 2, 90],
                [80, 76, 22],
                [11, 74, 96],
                [88, 56, 10],
                [30, 47, 49],
                [57, 62, 98],
                [4, 16, 16],
                [46, 10, 11],
                [22, 87, 89],
                [57, 91, 82],
                [45, 15, 98]
            ],
            marker: {
                 fillColor: {
                     radialGradient: { cx: 0.4, cy: 0.3, r: 0.7 },
                     stops: [
                         [0, 'rgba(255,255,255,0.5)'],
                         [1, 'rgba(170,70,67,0.5)']
                     ]
                 }
            }
        }]

    });
});
		</script>
	</head>
	<body>
<script src="../../js/highcharts.js"></script>
<script src="../../js/highcharts-more.js"></script>

<div id="container" style="width: 600px; height: 400px; margin: 0 auto;"></div>
	</body>
</html>
