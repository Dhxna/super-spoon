<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Custom fonts for this template-->
    <link href="assetss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="assetss/dua/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="assetss/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="<? base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') ?>"></script>
    <script src="<? base_url('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') ?>"></script>
    <link rel="<? base_url('stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css') ?>" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="icon" href="<?= base_url('../assetss/img/sucofindo.png') ?>">
</head>

<body id="page-top">
    <div id="wrapper">
        <?= $this->include('layout/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?= $this->include('layout/header') ?>
                <?= $this->renderSection('content') ?>
            </div>
            <?= $this->include('layout/footer') ?>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assetss/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <!--<script src="<?= base_url('assetss/vendor/fontawesome-free/js/fontawesome.min4.js') ?>"></script>-->

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assetss/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assetss/js/sb-admin-2.min.js') ?>"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url('assetss/vendor/chart.js/Chart.min.js') ?>"></script>
        <script src="<?= base_url('assetss/plugins/apexcharts/dist/apexcharts.min.js') ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url('assetss/js/demo/chart-area-demo.js') ?>"></script>
        <script src="<?= base_url('assetss/js/demo/chart-pie-demo.js') ?>"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assetss/dua/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assetss/dua/demo/chart-area-demo.js"></script>
        <script src="assetss/dua/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assetss/dua/js/datatables-simple-demo.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assetss/dua/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<? base_url('assetss/dua/assets/demo/chart-area-demo.js') ?>"></script>
        <script src="<? base_url('assetss/dua/assets/demo/chart-bar-demo.js') ?>"></script>
        <script src="<? base_url('assetss/dua/assets/demo/chart-pie-demo.js') ?>"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</body>

</html>