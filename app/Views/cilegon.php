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

    <title>Banjarmasin</title>

</head>

<body>
    <style>
        body {
            font-size: .75rem !important;
        }
    </style>
    <link href="assetss/css/cdn.css" rel="stylesheet" />
    <link href="assetss/css/styles.css" rel="stylesheet" />
    <link href="assetss/css/cdndata.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </link>

    <div class="container-fluid">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Aset Cabang 2022-Cilegon
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

                    <thead>
                        <p class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Tipe</th>
                                <th>Serial Number</th>
                                <th>Nomor Inventaris</th>
                                <th>Tahun Perolehan</th>
                                <th>Posisi/Lokasi Aset</th>
                                <th>Penanggung Jawab</th>
                                <th>Kondisi Barang</th>
                                <!-- <th></th>
                            <th></th> -->
                            </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $cilegon = mysqli_query($koneksi, "select * from cilegon");
                        while ($row = mysqli_fetch_array($cilegon)) {
                            echo "
            <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['nama_barang'] . "</td>
            <td>" . $row['merk'] . "</td>
            <td>" . $row['tipe'] . "</td>
            <td>" . $row['serial_number'] . "</td>
            <td>" . $row['no_inventaris'] . "</td>
            <td>" . $row['tahun_perolehan'] . "</td>
            <td>" . $row['posisi'] . "</td>
            <td>" . $row['penanggung_jawab'] . "</td>
            <td>" . $row['kondisi_barang'] . "</td>
                                </tr>";
                        }
                        ?>
                    </tbody>

                    <script>
                        $(document).ready(function() {
                            $('#tabel-data').DataTable();
                        });
                        $('#sortTable').DataTable();
                        $(document).ready(function() {
                            $("#example").DataTable();
                        });
                    </script>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    </div>

    <script>
        function confirmToDelete(el) {
            $("#delete-button").attr("href", el.dataset.href);
            $("#confirm-dialog").modal('show');
            $(document).ready(function() {
                $('#example').DataTable();
            });
        }
    </script>
    </div>
    </div>
</body>

</html>
<?= $this->endSection() ?>