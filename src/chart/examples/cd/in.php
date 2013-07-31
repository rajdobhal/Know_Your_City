<?php
include "connection.php";

include "rf.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Rainfall Measures</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"> alert("hello");</script>
        <script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Average Monthly Rainfall'
            },
            subtitle: {
                text: 'Source: data.gov.in'
            },
            xAxis: [{
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value} mm',
                    style: {
                        color: '#89A54E'
                    }
                },
            //    title: {
              //      text: 'Temperature',
                //    style: {
                  //      color: '#89A54E'
                    //}
              //  }
            }, { // Secondary yAxis
                title: {
                    text: 'Rainfall',
                    style: {
                        color: '#4572A7'
                    }
                },
                //labels: {
                 //   format: '{value} mm',
                   // style: {
                     //   color: '#4572A7'
                    //}
               // },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: '#FFFFFF'
            },
            series: [{
                name: 'Rainfall',
                color: '#4572A7',
                type: 'column',
                yAxis: 1,
                data: [v1,v2,v3,v4,v5,v6,v7,v8,v9,x1,x2,x3],
                tooltip: {
                    valueSuffix: ' mm'
                }
    
            }, //{
               // name: 'Temperature',
                //color: '#89A54E',
                //type: 'spline',
                //data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                //tooltip: {
                  //  valueSuffix: '°C'
                //}
            //}
            ]
        });
    });
    

        </script>
    </head>
    <body>
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

    </body>
</html>
