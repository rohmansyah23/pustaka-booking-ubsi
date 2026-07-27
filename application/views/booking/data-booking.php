<div class="container-deku">
    <div class="row text-center">
        <div class="col-md-4"><h5 class="mt-4" style="color: crimson;"></h5></div>
        <div class="col-md-5"><h5 class="mt-4"><i class="fa-solid fa-cart-shopping" style="color:crimson;"></i> Buku yang sudah anda booking</h5></div>
        <div class="col-md-3"><h5 class="mt-4"><i class="fa-solid fa-calendar-days" style="color:crimson;"></i>&nbsp; <?= date('Y-m-d'); ?></h5></div>
    </div>
    <div class="container mt-3">
        <div class="text-center">
            <div class="table-responsive full-width">
                <table class="table table-bordered table-dark" id="table-datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($temp as $t): ?>
                        <tr>
                            <td><?= $no; ?>.</td>
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
            <div class="">
                <a class="tombol tombol-booking mr-2" href="<?php echo base_url(); ?>">
                    <i class="fa fa-cart-plus"></i> Tambah Buku
                </a>
                <a class="tombol tombol-daftar" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>">
                    <i class="fa fa-cart-flatbed" style="color:crimson;"></i> Selesaikan Booking
                </a>
            </div>
            <br><br>
        </div>
    </div>

</div>

