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
    <div class="col-lg-12 mb-4">

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
                        name: 'Sales',
                        data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
                    }],
                    chart: {
                        height: 350,
                        type: 'line',
                    },
                    forecastDataPoints: {
                        count: 7
                    },
                    stroke: {
                        width: 5,
                        curve: 'smooth'
                    },
                    xaxis: {
                        type: 'datetime',
                        categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001', '4/11/2001', '5/11/2001', '6/11/2001'],
                        tickAmount: 10,
                        labels: {
                            formatter: function(value, timestamp, opts) {
                                return opts.dateFormatter(new Date(timestamp), 'dd MMM')
                            }
                        }
                    },
                    title: {
                        text: 'Forecast',
                        align: 'left',
                        style: {
                            fontSize: "16px",
                            color: '#666'
                        }
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'dark',
                            gradientToColors: ['#FDD835'],
                            shadeIntensity: 1,
                            type: 'horizontal',
                            opacityFrom: 1,
                            opacityTo: 1,
                            stops: [0, 100, 100, 100]
                        },
                    },
                    yaxis: {
                        min: -10,
                        max: 40
                    }
                };

                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();
            </script>
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

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
                    <div id="realtime">
                    </div>

                    <script>
                        var options = {
                            series: [{
                                data: data.slice()
                            }],
                            chart: {
                                id: 'realtime',
                                height: 350,
                                type: 'line',
                                animations: {
                                    enabled: true,
                                    easing: 'linear',
                                    dynamicAnimation: {
                                        speed: 1000
                                    }
                                },
                                toolbar: {
                                    show: false
                                },
                                zoom: {
                                    enabled: false
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: 'smooth'
                            },
                            title: {
                                text: 'Dynamic Updating Chart',
                                align: 'left'
                            },
                            markers: {
                                size: 0
                            },
                            xaxis: {
                                type: 'datetime',
                                range: XAXISRANGE,
                            },
                            yaxis: {
                                max: 100
                            },
                            legend: {
                                show: false
                            },
                        };

                        var chart = new ApexCharts(document.querySelector("#chart"), options);
                        chart.render();


                        window.setInterval(function() {
                            getNewSeries(lastDate, {
                                min: 10,
                                max: 90
                            })

                            chart.updateSeries([{
                                data: data
                            }])
                        }, 1000)
                    </script>
</body>

</html>
<?= $this->endSection() ?>