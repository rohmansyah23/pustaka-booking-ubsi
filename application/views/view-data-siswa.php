<html>

<head>
    <title>Tampil Data Hewan</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Hewan
                </th>
            </tr>
            
            <tr>
                <td>Jenis Hewan</td>
                <td>:</td>
                <td>
                    <?= $jenis_hewan; ?>
                </td>
            </tr>
            <tr>
                <td>Usia Hewan</td>
                <td>:</td>
                <td>
                    <?= $umur; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('siswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>