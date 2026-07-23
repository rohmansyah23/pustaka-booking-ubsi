<html>

<head>
    <title>Form Input Data Hewan</title>
</head>

<body>
    <div class="f_title">
        <h3>Ini adalah halaman utama Quiz </h3>
    </div>

    <center>
        <h1>Kesehatan Hewan</h1>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Hewan Anda
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <th>Pilih Jenis Hewan</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_hewan" value="kucing">Kucing<br>
                        <input type="radio" name="jenis_hewan" value="anjing">Anjing<br>
                    </td>
                </tr>

                <tr>
                    <th>Usia Hewan</th>
                    <td>:</td>
                    <td>
                        <select name="umur" id="umur">
                            <option value="">Umur Hewan</option>
                            <option value="anakan">Anakan</option>
                            <option value="remaja">Remaja</option>
                            <option value="dewasa">Dewasa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
            <br>
        </form>
    </center>
</body>

</html>