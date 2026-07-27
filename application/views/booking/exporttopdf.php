<!DOCTYPE html>
<html>
<head>

    <title>Laporan Data Peminjaman Buku</title>
    <style type="text/css">
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        th {
            border: 1px solid #ccc;
            height: 20px;
            margin: 8px;
            background-color: #f2f2f2;
        }
        td {
            border: 1px solid #ccc;
            height: 20px;
            margin: 8px;
            background-color: #fff;
        }
        h1 {
            text-align: center;
            color: #dc3545;
        }
        p {
            text-align: center;
            color: #dc3545;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku yang Anda Booking</h1>
        <br/>
        <table cellpadding="6">
            <tr>
                <th class="text-left"><?php foreach ($useraktif as $u): ?>Nama Member : <?= $u->nama; ?><?php endforeach; ?></th>
            </tr>
        </table>
        <table cellpadding="6">
            <tr>
                <td>Judul Buku yang dibooking : <?php foreach ($items as $i): ?><?= $i['judul_buku']; ?>,<?php endforeach; ?></td>
            </tr>
        </table>
        <table cellpadding="6">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($items as $i) { ?>
                    <tr>
                        <td><?= $no++; ?>.</td>
                        <td><?= $i['judul_buku']; ?></td>
                        <td><?= $i['pengarang']; ?></td>
                        <td><?= $i['penerbit']; ?></td>
                        <td><?= $i['tahun_terbit']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <table cellpadding="6">
            <tr>
                <th align="center"><?= md5(date('d M Y H:i:s')); ?></th>
            </tr>
        </table>
        <table cellpadding="6">
            <tr>
                <td align="center">Tanggal Cetak: <?= date('Y-m-d'); ?></td>
            </tr>
        </table>
    </body>
    </html>
