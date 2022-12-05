<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

</head>

<body>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main  Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
                <!-- <div class="col-xl-4 col-lg-8">
                        <div class="col-lg-6 mb-4">-->
                <!-- Content Row -->
                <div class="row">
                    <div class="col-xl-4 col-lg-8">
                        <div class="col-lg-14 mb-5">
                            <div class="card bg-primary text-white shadow">
                                <div class="card-body">
                                    Suhu
                                    <div class="text-white shadow-50 small">30&deg;C</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-14 mb-5">
                            <div class="card bg-info text-white shadow">
                                <div class="card-body">
                                    Kelembaban
                                    <div class="text-white shadow-50 small">70%</div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row">
                                <h6 class="m-0 font-weight-bold text-primary">Performance-WAN</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Perkiraan Waktu:</div>
                                        <a class="dropdown-item" href="#">Hari ini</a>
                                        <a class="dropdown-item" href="#">Minggu ini</a>
                                        <a class="dropdown-item" href="#">Bulan ini</a>
                                    </div>
                                    <style type="text/css">
                                        .container {
                                            width: 100%;
                                            margin: 15px;
                                        }
                                    </style>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="container">
                                <div class="row">
                                    <canvas id="canvas" width="100" height="100"></canvas>
                                </div>
                            </div>
                            </style>
                            <script src="assetss/speed/js/Chart.js"></script>
                            <script src="assetss/speed/js/Gauge.js"></script>
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
                                            gaugeLimits: [0, 35, 70, 100]
                                        }]
                                    },
                                    options: {
                                        events: [],
                                        showMarkers: true
                                    }
                                });
                            </script>
                        </div>
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row">
                                <h6 class="m-0 font-weight-bold text-primary">Resources Availability-Storage</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                    <style type="text/css">
                                        .container {
                                            width: 100%;
                                            margin: 15px;
                                        }
                                    </style>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="container">
                                <div class="row">
                                    <canvas id="canvass" width="100" height="100"></canvas>
                                </div>
                            </div>
                            </style>
                            <script src="assetss/speed/js/Chart.js"></script>
                            <script src="assetss/speed/js/Gauge.js"></script>
                            <?php $angka = 30; ?>

                            <script type="text/javascript">
                                var ctx = document.getElementById("canvass").getContext("2d");
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
                                            gaugeLimits: [0, 35, 70, 100]
                                        }]
                                    },
                                    options: {
                                        events: [],
                                        showMarkers: true
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-1">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Cyber Intrusion</h6>
                                <style type="text/css">
                                    .container {
                                        width: 100%;
                                        margin: 15px;
                                    }
                                </style>
                            </div>
                            <div class="container">
                                <canvas id="myChart" width="50" height="50"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                            <div id="chart">
                            </div>

                            <script>
                                var options = {
                                    series: [{
                                        name: 'PRODUCT A',
                                        data: [44, 55, 41, 67, 22, 43]
                                    }, {
                                        name: 'PRODUCT B',
                                        data: [13, 23, 20, 8, 13, 27]
                                    }, {
                                        name: 'PRODUCT C',
                                        data: [11, 17, 15, 15, 21, 14]
                                    }, {
                                        name: 'PRODUCT D',
                                        data: [21, 7, 25, 13, 22, 8]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350,
                                        stacked: true,
                                        toolbar: {
                                            show: true
                                        },
                                        zoom: {
                                            enabled: true
                                        }
                                    },
                                    responsive: [{
                                        breakpoint: 480,
                                        options: {
                                            legend: {
                                                position: 'bottom',
                                                offsetX: -10,
                                                offsetY: 0
                                            }
                                        }
                                    }],
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            borderRadius: 0,
                                            dataLabels: {
                                                total: {
                                                    enabled: true,
                                                    style: {
                                                        fontSize: '13px',
                                                        fontWeight: 900
                                                    }
                                                }
                                            }
                                        },
                                    },
                                    xaxis: {
                                        type: 'datetime',
                                        categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
                                            '01/05/2011 GMT', '01/06/2011 GMT'
                                        ],
                                    },
                                    legend: {
                                        position: 'right',
                                        offsetY: 40
                                    },
                                    fill: {
                                        opacity: 1
                                    }
                                };

                                var chart = new ApexCharts(document.querySelector("#chart"), options);
                                chart.render();
                            </script>
                        </div>
                        <div class="card shadow mb-5">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">iTop-Helpdesk</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                    <style type="text/css">
                                        .container {
                                            width: 100%;
                                            margin: 15px auto;
                                            text-align: center;
                                        }
                                    </style>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="container">
                                <canvas id="myChartt" width="50" height="50"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                            <div id="charttt">
                            </div>
                            </style>
                            <script src="assetss/speed/js/Chart.js"></script>
                            <script src="assetss/speed/js/Gauge.js"></script>

                            <script type="text/javascript">
                                var options = {
                                    series: [{
                                        name: 'Jumlah Ticket',
                                        data: [97, 0]
                                    }, {
                                        name: 'Solved, sesuai SLA',
                                        data: [0, 59]
                                    }, {
                                        name: 'Solved, dibawah SLA',
                                        data: [0, 38]

                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350,
                                        stacked: true,
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: true,
                                            dataLabels: {
                                                total: {
                                                    enabled: true,
                                                    offsetX: 0,
                                                    style: {
                                                        fontSize: '13px',
                                                        fontWeight: 900
                                                    }
                                                }
                                            }
                                        },
                                    },
                                    stroke: {
                                        width: 1,
                                        colors: ['#fff']
                                    },
                                    title: {
                                        text: 'Persentase Permintaan Ticket selama 7 Hari'
                                    },
                                    xaxis: {
                                        categories: ["Permintaan Ticket"],
                                        labels: {
                                            formatter: function(val) {
                                                return val + ""
                                            }
                                        }
                                    },
                                    yaxis: {
                                        title: {
                                            text: undefined
                                        },
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function(val) {
                                                return val + "K"
                                            }
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    legend: {
                                        position: 'top',
                                        horizontalAlign: 'left',
                                        offsetX: 40
                                    }
                                };

                                var chart = new ApexCharts(document.querySelector("#charttt"), options);
                                chart.render();
                            </script>
                        </div>
                    </div>
                </div>


                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-7 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Backup Harian Status Aplikasi</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                    <style type="text/css">
                                        .container {
                                            width: 100%;
                                            margin: 15px auto;
                                            text-align: center;
                                        }
                                    </style>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="container">
                                <canvas id="myChart" width="50" height="50"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                            <script src="assetss/speed/js/Chart.js"></script>
                            <script src="assetss/speed/js/Gauge.js"></script>
                            <div id="chartbar">
                            </div>
                            <script>
                                var options = {
                                    series: [{
                                        name: 'PRODUCT A',
                                        data: [44, 55, 41, 67, 22, 43]
                                    }, {
                                        name: 'PRODUCT B',
                                        data: [13, 23, 20, 8, 13, 27]
                                    }, {
                                        name: 'PRODUCT C',
                                        data: [11, 17, 15, 15, 21, 14]
                                    }, {
                                        name: 'PRODUCT D',
                                        data: [21, 7, 25, 13, 22, 8]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350,
                                        stacked: true,
                                        toolbar: {
                                            show: true
                                        },
                                        zoom: {
                                            enabled: true
                                        }
                                    },
                                    responsive: [{
                                        breakpoint: 480,
                                        options: {
                                            legend: {
                                                position: 'bottom',
                                                offsetX: -10,
                                                offsetY: 0
                                            }
                                        }
                                    }],
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            borderRadius: 10,
                                            dataLabels: {
                                                total: {
                                                    enabled: true,
                                                    style: {
                                                        fontSize: '13px',
                                                        fontWeight: 900
                                                    }
                                                }
                                            }
                                        },
                                    },
                                    xaxis: {
                                        type: 'datetime',
                                        categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
                                            '01/05/2011 GMT', '01/06/2011 GMT'
                                        ],
                                    },
                                    legend: {
                                        position: 'right',
                                        offsetY: 40
                                    },
                                    fill: {
                                        opacity: 1
                                    }
                                };

                                var chart = new ApexCharts(document.querySelector("#chartbar"), options);
                                chart.render();
                            </script>


                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row">
                                <h6 class="m-0 font-weight-bold text-primary">Login User Application</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                    <style type="text/css">
                                        .container {
                                            width: 100%;
                                            margin: 15px;
                                        }
                                    </style>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="container">
                                <canvas id="myChartt" width="50" height="50"></canvas>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                            <div id="chartttt">
                            </div>
                            <script src="assetss/speed/js/Chart.js"></script>
                            <script src="assetss/speed/js/Gauge.js"></script>
                            <?php $angka = 50; ?>

                            <script type="text/javascript">
                                var options = {
                                    series: [44, 55, 13, 43, 22],
                                    chart: {
                                        width: 380,
                                        type: 'pie',
                                    },
                                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                                    responsive: [{
                                        breakpoint: 480,
                                        options: {
                                            chart: {
                                                width: 200
                                            },
                                            legend: {
                                                position: 'bottom'
                                            }
                                        }
                                    }]
                                };

                                var chart = new ApexCharts(document.querySelector("#chartttt"), options);
                                chart.render();
                            </script>
                        </div>

                    </div>
                </div>
                <div class="col-lg-14 mb-2">
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Safety and Security Monitoring</h6>
                            <style type="text/css">
                                .container {
                                    width: 100%;
                                    margin: 15px;
                                }
                            </style>
                        </div>
                        <div class="container">
                            <canvas id="myChart" width="50" height="50"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                        <div id="charthai">
                        </div>
                        <script>
                            var options = {
                                series: [{
                                    data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                                }],
                                chart: {
                                    type: 'bar',
                                    height: 350
                                },
                                plotOptions: {
                                    bar: {
                                        borderRadius: 4,
                                        horizontal: true,
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                xaxis: {
                                    categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                                        'United States', 'China', 'Germany'
                                    ],
                                }
                            };

                            var chart = new ApexCharts(document.querySelector("#charthai"), options);
                            chart.render();
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Main Content -->

</body>

</html>
<?= $this->endSection() ?>