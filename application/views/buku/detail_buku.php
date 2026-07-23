<!-- Begin Page Content -->
<div class="container-deku">
    <div class="row justify-content-center"> <!-- menggunakan justify-content-center untuk menengahkan row -->
        <div class="col-lg mx-auto">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>

    <div class="row mt-5 my-5 border shadow rounded" style="background: linear-gradient(to right, white, ghostwhite, #ccc);">
        <div class="book_d">
            <img src="<?= base_url('assets/img/upload/' . $gambar); ?>" class="book_d">
        </div>
        <div class="col-md-4">
            <div class="caption">
                <div class="card-body rounded md-4">
                    <div class="mt-3 ml-5">
                        <h2 class="card-title mt-4">Informasi Buku</h2>
                        <p class="card-title mt-3">Pengarang : <?= $pengarang ?></p>
                        <p class="card-title mt-3">Judul Buku : <?= $judul; ?></p>
                        <p class="card-title mt-3">Kategori : <?= $kategori ?></p>
                        <p class="card-title mt-3">Penerbit : <?= $penerbit ?></p>
                        <p class="card-title mt-3">Tahun Terbit : <?= substr($tahun, 0, 4) ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="caption">
                <div class="card-body rounded md-4">
                    <div class="mt-3">
                        <h2 class="card-title mt-4">&emsp;</h2>
                        <p class="card-title mt-3">Dibooking : <?= $dibooking ?></p>
                        <p class="card-title mt-3">ISBN : <?= $isbn; ?></p>
                        <p class="card-title mt-3">Tersedia : <?= $stok ?></p>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-warning shadow mr-2" href="<?= base_url('booking/tambahBooking/' . $id); ?>"><i class="fas fa-shopping-cart"></i> Booking</a>
                        <a class="btn btn-dark" href="<?= base_url(); ?>"><i class="fas fa-reply"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
