<?php
$koneksi     = mysqli_connect("localhost", "root", "", "coba");
$bulan       = mysqli_query($koneksi, "SELECT bulan FROM penjualan WHERE tahun='2016' order by id asc");
$penghasilan = mysqli_query($koneksi, "SELECT hasil_penjualan FROM penjualan WHERE tahun='2016' order by id asc");
?>
<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<html>

<head>
    <title>Charts</title>
    <script src="Chart.bundle.js"></script>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">-->

    <style type="text/css">
        .container {
            width: 50%;
            margin: 15px auto;
        }
    </style>
</head>

<body>
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-10">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="container">
                    <canvas id="myChart" width="100" height="100"></canvas>
                </div>
                <script>
                    var ctx = document.getElementById("myChart");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [<?php while ($b = mysqli_fetch_array($bulan)) {
                                            echo '"' . $b['bulan'] . '",';
                                        } ?>],
                            datasets: [{
                                label: '# of Votes',
                                data: [<?php while ($p = mysqli_fetch_array($penghasilan)) {
                                            echo '"' . $p['hasil_penjualan'] . '",';
                                        } ?>],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>

                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-12 mb-10">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                            </div>
                            <div class="container">
                                <canvas id="myChart" width="100" height="100"></canvas>
                            </div>
                            <title>My first chart using FusionCharts Suite XT</title>
                            <!-- Include fusioncharts core library -->
                            <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
                            <!-- Include fusion theme -->
                            <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
                            <script type="text/javascript">
                                //STEP 2 - Chart Data
                                const chartData = [{
                                    "label": "Venezuela",
                                    "value": "290"
                                }, {
                                    "label": "Saudi",
                                    "value": "260"
                                }, {
                                    "label": "Canada",
                                    "value": "180"
                                }, {
                                    "label": "Iran",
                                    "value": "140"
                                }, {
                                    "label": "Russia",
                                    "value": "115"
                                }, {
                                    "label": "UAE",
                                    "value": "100"
                                }, {
                                    "label": "US",
                                    "value": "30"
                                }, {
                                    "label": "China",
                                    "value": "200"
                                }];

                                //STEP 3 - Chart Configurations
                                const chartConfig = {
                                    type: 'column2d',
                                    renderAt: 'chart-container',
                                    width: '100%',
                                    height: '400',
                                    dataFormat: 'json',
                                    dataSource: {
                                        // Chart Configuration
                                        "chart": {
                                            "caption": "Countries With Most Oil Reserves [2017-18]",
                                            "subCaption": "In MMbbl = One Million barrels",
                                            "xAxisName": "Country",
                                            "yAxisName": "Reserves (MMbbl)",
                                            "numberSuffix": "K",
                                            "theme": "fusion",
                                        },
                                        // Chart Data
                                        "data": chartData
                                    }
                                };
                                FusionCharts.ready(function() {
                                    var fusioncharts = new FusionCharts(chartConfig);
                                    fusioncharts.render();
                                });
                            </script>
                            </head>

                            <body>
                                <div id="chart-container">FusionCharts XT will load here!</div>
                            </body>

                            <div class="row">

                                <!-- Content Column -->
                                <div class="col-lg-12 mb-10">

                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                        </div>
                                        <div class="container">
                                            <canvas id="myChart" width="100" height="100"></canvas>
                                        </div>

                                        <head link rel="stylesheet" href="assetss/speed/css/bootstrap.min.css">
                                            <meta chartset="utf-8">
                                            <title>Speed Chart</title>

                                            <style type="text/css">
                                                .container {
                                                    width: 50%;
                                                    height: 30%;
                                                }
                                            </style>
                                            <script src="assetss/speed/js/Chart.js"></script>
                                            <script src="assetss/speed/js/Gauge.js"></script>
                                        </head>

                                        <body>
                                            <div class="container">
                                                <div class="row" align="center">
                                                    <canvas id="canvas" width="130" height="130"></canvas>
                                                </div>
                                            </div>
                                        </body>


                                        <?php $angka = 50; ?>

                                        <script type="text/javascript">
                                            var ctx = document.getElementById("canvas").getContext("2d");
                                            new Chart(ctx, {
                                                type: "tsgauge",
                                                data: {
                                                    datasets: [{
                                                        backgroundColor: ['#ff0000', '#ffff00', '#008000'],
                                                        borderWidth: 0,
                                                        gaugeData: {
                                                            value: <?php echo $angka; ?>,
                                                            valueColor: "#ff7143"
                                                        },
                                                        gaugeLimits: [0, 25, 50, 75, 100]
                                                    }]
                                                },
                                                options: {
                                                    events: [],
                                                    showMarkers: true
                                                }
                                            });
                                        </script>
</body>

</html>
<?= $this->endSection() ?>