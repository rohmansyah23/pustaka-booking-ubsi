
    <div class="container">
        <div class="text-center"><br>
            <?php foreach ($useraktif as $u): ?>
            <h6>Terimakasih <b><?= $u->nama; ?></b> Berikut daftar buku yang anda pesan :</h6>
            <?php endforeach; ?><br>
            <tr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>Buku</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                            </tr>
                            <?php $no = 1; foreach ($items as $i): ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td style="text-align: center;">
                                    <img src="<?= base_url('assets/img/upload/' . $i['image']); ?>"class="rounded" alt="No Picture" style="width: 150px; height: 200px;">
                                </td>
                                <td><?= $i['pengarang']; ?></td>
                                <td><?= $i['penerbit']; ?></td>
                                <td><?= $i['tahun_terbit']; ?></td>
                            </tr>
                            <?php $no++; endforeach; ?>
                        </table>
                    </div>
                
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>
                    <script>
                        function showInformation() {
                            var message = 'Waktu Pengambilan Buku 1x24 jam dari Booking!!!';
                            information(encodeURIComponent(message));
                        }
                    </script>
                </td>
            </tr>
            <tr>
                <td>Download Bukti Booking Buku</td>
            </tr>
            <tr>
                <td>
                    <a class="btn btn-sm btn-outline-danger" onclick="showInformation()" href="<?= base_url('booking/exporttoPdf/' . $this->session->userdata('id_user')); ?>" target="_blank">
                        <span class="far fa-lg fa-fw fa-file-pdf"></span> PDF
                    </a>
                </td>
            </tr>
            <br><br><br>
        </div>
    </div>

