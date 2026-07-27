<div class="container-deku">
    <div class="row justify-content-center">
        <div class="col-lg">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="row rounded">
        <div class="book_d col-md-3">
            <img src="<?= base_url('assets/img/upload/' . $gambar); ?>" class="book_d">
        </div>
        <div class="col-md-5">
            <div class="card rounded">
                <div class="card-body">
                    <h2 class="card-title mt-4" style="color: crimson;">Informasi Buku</h2>
                    <p class="card-text">Judul Buku : <?= $judul; ?></p>
                    <p class="card-text">Pengarang : <?= $pengarang ?></p>
                    <p class="card-text">Kategori : <?= $kategori ?></p>
                    <p class="card-text">Penerbit : <?= $penerbit ?></p>
                    <p class="card-text">Tahun Terbit : <?= substr($tahun, 0, 4) ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="card-body rounded">

                <h2 class="card-title mt-4">&emsp;</h2>
                <p class="card-text">Dibooking : <?= $dibooking ?></p>
                <p class="card-text">ISBN : <?= $isbn; ?></p>
                <p class="card-text">Tersedia : <?= $stok ?></p>

                <a class="tombol tombol-booking mr-2" href="<?= base_url('booking/tambahBooking/' . $id); ?>"><i class="fas fa-shopping-cart"></i> Booking</a>
                <a class="tombol tombol-kembali" href="<?= base_url(); ?>"><i class="fas fa-reply"></i> Kembali</a>
            </div>
        </div>
    </div>
</div>