<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- Content Column -->
    <div class="col-lg-12 mb-10">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Chart</h6>
            </div>
            <div class="container">
                <canvas id="myChart" width="80" height="80"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <div id="chart">
            </div>

            <script>
                var options = {
                    series: [{
                            name: 'Males',
                            data: [0.4, 0.65, 0.76, 0.88, 1.5, 2.1, 2.9, 3.8, 3.9, 4.2, 4, 4.3, 4.1, 4.2, 4.5,
                                3.9, 3.5, 3
                            ]
                        },
                        {
                            name: 'Females',
                            data: [-0.8, -1.05, -1.06, -1.18, -1.4, -2.2, -2.85, -3.7, -3.96, -4.22, -4.3, -4.4,
                                -4.1, -4, -4.1, -3.4, -3.1, -2.8
                            ]
                        }
                    ],
                    chart: {
                        type: 'bar',
                        height: 440,
                        stacked: true
                    },
                    colors: ['#008FFB', '#FF4560'],
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            barHeight: '80%',
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: 1,
                        colors: ["#fff"]
                    },

                    grid: {
                        xaxis: {
                            lines: {
                                show: false
                            }
                        }
                    },
                    yaxis: {
                        min: -5,
                        max: 5,
                        title: {
                            // text: 'Age',
                        },
                    },
                    tooltip: {
                        shared: false,
                        x: {
                            formatter: function(val) {
                                return val
                            }
                        },
                        y: {
                            formatter: function(val) {
                                return Math.abs(val) + "%"
                            }
                        }
                    },
                    title: {
                        text: 'Mauritius population pyramid 2011'
                    },
                    xaxis: {
                        categories: ['85+', '80-84', '75-79', '70-74', '65-69', '60-64', '55-59', '50-54',
                            '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19', '10-14', '5-9',
                            '0-4'
                        ],
                        title: {
                            text: 'Percent'
                        },
                        labels: {
                            formatter: function(val) {
                                return Math.abs(Math.round(val)) + "%"
                            }
                        }
                    },
                };

                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();
            </script>
</body>

</html>
<?= $this->endSection() ?>