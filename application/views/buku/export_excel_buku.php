<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Nama_File.xls");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        th {
            border: 1px solid #ccc;
            text-align: center;
            height: 20px;
            margin: 8px;
            background-color: #f2f2f2;
        }
        td {
            border: 1px solid #ccc;
            text-align: center;
            height: 20px;
            margin: 8px;
            background-color: #fff;
        }
        h1 {
            text-align: center;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Daftar Buku Yang Tersedia pada Pustaka Booking</h1>
        <table cellpadding="6">
            <tr>
                <th><b>Nomor</b></th>
                <th><b>Judul Buku</b></th>
                <th><b>Pengarang</b></th>
                <th><b>Penerbit</b></th>
                <th><b>Tahun Penerbit</b></th>
                <th><b>ISBN</b></th>
                <th><b>Stok</b></th>
            </tr>
            <?php $no = 1; foreach($buku as $b) { ?>
            <tr>
                <td><?= $no++; ?></td> <!-- Menghapus tanda titik dan spasi setelah nomor -->
                <td><?= $b['judul_buku']; ?></td>
                <td><?= $b['pengarang']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['tahun_terbit']; ?></td>
                <td><?= $b['isbn']; ?></td>
                <td><?= $b['stok']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>
