<div class="container-deku">
    <div class="row justify-content-center">
        <div class="col-lg">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="row rounded">
        <div class="book_p col-md-4">
            <img src="<?= base_url('assets/img/profile/') . $image; ?>">
        </div>
        <div class="col-md-5">
            <div class="card rounded">
                <div class="card-body">
                    <h2 class="card-title mt-4" style="color: crimson;">Informasi Profil</h2>
                    <p class="card-text">Nama Member : <?= $user; ?></p>
                    <p class="card-text">Email : <?= $email ?></p>
                    <p class="card-text">Alamat : <?= $alamat ?></p>
                    <p class="card-text">Menjadi Member Sejak : <?= date('d F Y', $tanggal_input); ?></p>
                    <a class="tombol tombol-booking mr-1" href="<?= base_url('member/ubahprofil');?>"><i class="fas fa-user-edit"></i> Ubah Profil</a>
                <a class="tombol tombol-detail" href="<?= base_url(); ?>"><i class="fas fa-reply"></i>&emsp;Kembali&emsp;</a>
                </div>  
            </div>
        </div>
    </div>
</div>