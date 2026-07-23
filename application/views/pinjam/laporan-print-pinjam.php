<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Peminjaman Buku</title>
    <style type="text/css">
        table {
            font-family: verdana, sans-serif;
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
    <h1>LAPORAN DATA PEMINJAMAN BUKU</h1>
    <br/>
    <table cellpadding="6">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalian</th>
                <th>Total Denda</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($laporan as $l) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $l['nama']; ?></td>
                    <td><?= $l['judul_buku']; ?></td>
                    <td><?= $l['tgl_pinjam']; ?></td>
                    <td><?= $l['tgl_kembali']; ?></td>
                    <td><?= $l['tgl_pengembalian']; ?></td>
                    <td><?= $l['total_denda']; ?></td>
                    <td><?= $l['status']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
