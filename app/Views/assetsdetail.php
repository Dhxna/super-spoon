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
                Data Aset Cabang 2022-Timika
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

                    <thead>
                        <p class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Asset Number</th>
                                <th>Tag Number</th>
                                <th>Unit Kerja</th>
                                <th>Kd_Kat Barang</th>
                                <th>Kategori Barang</th>
                                <th>Urutan Tag Number</th>
                                <th>Nama Barang</th>
                                <th>Kategori ERP</th>
                                <th>Asset Key</th>
                                <th>Kondisi Barang</th>
                                <th>Status Barang</th>
                                <th>Tanggal Perolehan</th>
                                <th>Tahun Perolehan 2</th>
                                <th>Tahun Perolehan</th>
                                <th>Umur Ekonomi</th>
                                <th>Nilai Perolehan</th>
                                <th>Nilai Penyusutan</th>
                                <th>Nilai Buku</th>
                                <th>Tanggal Penyusutan</th>
                                <th>Area Kota</th>
                                <th>Gedung</th>
                                <th>Sub Gedung</th>
                                <th>Posisi Aset</th>
                                <th>Kode Beban</th>
                                <th>Penganggung Jawab</th>
                                <th>Serial Number</th>
                                <th>Nomor BPG</th>
                                <th>Tanggal BPG</th>
                                <th>Nomor BPB</th>
                                <th>Tanggal BPB</th>
                                <th>Nomor Kontrak</th>
                                <th>Tanggal Kontrak</th>
                                <th>Merk</th>
                                <th>Tipe KFF Aset</th>
                                <th>Nomor Warna</th>
                                <th>Ukuran</th>
                                <th>Nomor Chasis Mesin</th>
                                <th>Tahun Pembuatan</th>
                                <th>Negara Pembuatan</th>
                                <th>Status Perolehan</th>
                                <th>Optimalisasi</th>
                                <th>Status BPYBDS</th>
                                <th>Status Produktifitas</th>
                                <th>Status Penguasaan</th>
                                <th>Nilai Wajar</th>
                                <th>Status Pengelolaan</th>
                                <th>Nama Pihak Kedua</th>
                                <th>Pengguna</th>
                                <th>Pengguna Isi</th>
                                <th>Upaya Pemanfaatan</th>
                                <th>Keterangan</th>
                                <th>Tanggal Dikeluarkan</th>
                                <th>Dikeluarkan Oleh</th>
                                <th>Tercatat atas Nama</th>
                                <th>Peruntukan</th>
                                <th>Jumlah Lantai</th>
                                <th>Proses Stock</th>
                                <th>Nomor Penugasan</th>
                                <th>Tahun</th>
                                <th>NPP Surveyor</th>
                                <th>Nama Surveyor</th>
                                <th>Nama Status</th>
                                <th>Verif Entry at</th>
                                <th>Verif Entry by</th>
                                <th>Modify at</th>
                                <th>Modify by</th>
                                <!-- <th></th>
                            <th></th> -->
                            </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksii.php';
                        $assetdetail = mysqli_query($koneksi, "select * from assetdetail");
                        while ($row = mysqli_fetch_array($assetdetail)) {
                            echo "
                        <tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['asset_number'] . "</td>
                                <td>" . $row['tag_number'] . "</td>
                                <td>" . $row['unit_kerja'] . "</td>
                                <td>" . $row['kd_kat_barang'] . "</td>
                                <td>" . $row['kategori_barang'] . "</td>
                                <td>" . $row['urutan_tagnumber'] . "</td>
                                <td>" . $row['nama_barang'] . "</td>
                                <td>" . $row['kategori_erp'] . "</td>
                                <td>" . $row['asset_key'] . "</td>
                                <td>" . $row['kondisi_barang'] . "</td>
                                <td>" . $row['status_barang'] . "</td>
                                <td>" . $row['tanggal_perolehan'] . "</td>
                                <td>" . $row['tahun_perolehan2'] . "</td>
                                <td>" . $row['tahun_perolehan'] . "</td>
                                <td>" . $row['umur_ekonomi'] . "</td>
                                <td>" . $row['nilai_perolehan'] . "</td>
                                <td>" . $row['nilai_penyusutan'] . "</td>
                                <td>" . $row['nilai_buku'] . "</td>
                                <td>" . $row['tanggal_penyusutan'] . "</td>
                                <td>" . $row['area_kota'] . "</td>
                                <td>" . $row['gedung'] . "</td>
                                <td>" . $row['sub_gedung'] . "</td>
                                <td>" . $row['posisi_aset'] . "</td>
                                <td>" . $row['kode_beban'] . "</td>
                                <td>" . $row['penanggung_jawab'] . "</td>
                                <td>" . $row['serial_number'] . "</td>
                                <td>" . $row['no_bpg'] . "</td>
                                <td>" . $row['tanggal_bpg'] . "</td>
                                <td>" . $row['no_bpb'] . "</td>
                                <td>" . $row['tanggal_bpb'] . "</td>
                                <td>" . $row['nomor_kontrak'] . "</td>
                                <td>" . $row['tanggal_kontrak'] . "</td>
                                <td>" . $row['merk'] . "</td>
                                <td>" . $row['tipe_kff_aset'] . "</td>
                                <td>" . $row['nomor_warna'] . "</td>
                                <td>" . $row['ukuran'] . "</td>
                                <td>" . $row['nomor_chasis_mesin'] . "</td>
                                <td>" . $row['tahun_pembuatan'] . "</td>
                                <td>" . $row['negara_pembuatan'] . "</td>
                                <td>" . $row['status_perolehan'] . "</td>
                                <td>" . $row['optimalisasi'] . "</td>
                                <td>" . $row['status_bpybds'] . "</td>
                                <td>" . $row['status_produktifitas'] . "</td>
                                <td>" . $row['status_penguasaan'] . "</td>
                                <td>" . $row['nilai_wajar'] . "</td>
                                <td>" . $row['status_pegelolaan'] . "</td>
                                <td>" . $row['nama_pihak_kedua'] . "</td>
                                <td>" . $row['pengguna'] . "</td>
                                <td>" . $row['pengguna_isi'] . "</td>
                                <td>" . $row['upaya_pemanfaatan'] . "</td>
                                <td>" . $row['keterangan'] . "</td>>
                                <td>" . $row['tanggal_dikeluarkan'] . "</td>
                                <td>" . $row['dikeluarkan_oleh'] . "</td>
                                <td>" . $row['tercatat_atas_nama'] . "</td>
                                <td>" . $row['peruntukan'] . "</td>
                                <td>" . $row['jumlah_lantai'] . "</td>
                                <td>" . $row['proses_stock'] . "</td>
                                <td>" . $row['no_penugasan'] . "</td>
                                <td>" . $row['tahun'] . "</td>
                                <td>" . $row['npp_surveyor'] . "</td>
                                <td>" . $row['nama_surveyor'] . "</td>
                                <td>" . $row['nama_status'] . "</td>
                                <td>" . $row['verif_entryat'] . "</td>
                                <td>" . $row['verif_entryby'] . "</td>
                                <td>" . $row['modify_at'] . "</td>
                                <td>" . $row['modify_by'] . "</td>
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
    </div>
    </div>
</body>

</html>