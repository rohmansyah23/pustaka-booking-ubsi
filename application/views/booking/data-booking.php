<div class="container-deku">
    <div class="row col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h4 class="text-center"><i class="fas fa-shopping-cart" style="color: #dc3545;"></i> Data Booking</h4>
        </div>
        <div class="col-md-4 mt-1">
            <p class="text-center"><i class="fas fa-calendar" style="color: #dc3545;"></i> <?= date('l, F j, Y'); ?></p>
        </div>
    </div>
    <div class="container mt-3">
        <div class="text-center">
            <div class="table-responsive full-width">
                <table class="table table-bordered table-striped table-hover" id="table-datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($temp as $t): ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td>
                                <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" style="width: 150px; height: 200px;" />
                            </td>
                            <td><?= $t['penulis']; ?></td>
                            <td><?= $t['penerbit']; ?></td>
                            <td><?= substr($t['tahun_terbit'], 0, 4); ?></td>
                            <td>
                                <a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking <?= $t['judul_buku']; ?>')">
                                    <i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
            <br>
            <div>
                <a class="btn btn-warning" href="<?php echo base_url(); ?>">
                    <i class="fas fw fa-play"></i> Lanjutkan Booking Buku
                </a>
                <a class="btn btn-dark" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>">
                    <i class="fas fw fa-stop"></i> Selesaikan Booking
                </a>
            </div>
            <br><br><br>
        </div>
    </div>
</div>

