<?= $this->session->flashdata('pesan'); ?>

<div class="kontenpstk">
    <!-- looping products -->
    <?php foreach ($buku as $item) { ?>
    <div class="book">
        <div class="container">
            <div class="">
                <img src="<?= base_url('assets/img/upload/' . $item->image); ?>" alt="<?= $item->judul_buku ?>">
            </div>
        </div>
        <div class="book-info">
            <h2 class="judul_buku"><?= $item->judul_buku ?></h2>
            <div class="book-details">
                <div class="book-author">
                    <h6><?= $item->pengarang?></h6>
                </div>
                <div class="book-year">
                    <h6><?= substr($item->tahun_terbit, 0, 4) ?></h6>
                </div>
            </div>
            <div class="overlay">
                <div class="button-container">
                    <?php if ($item->stok < 1) { ?>
                        <span class="btn btn-primary disabled">Booking 0</span>
                    <?php } else { ?>
                        <a class="btn btn-warning" href="<?= base_url('booking/tambahBooking/' . $item->id); ?>"><i class="fas fa-shopping-cart"></i> Booking</a>
                    <?php } ?>
                    <a class="btn btn-dark" href="<?= base_url('home/detailBuku/' . $item->id); ?>"><i class="fas fa-search"></i> Detail</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- end looping -->
</div>

