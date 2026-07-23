<!-- Begin Page Content -->
<div class="container-deku">
    <div class="row">
        <div class="col-lg mx-auto">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="" style="max-width: 100%;">
        <div class="row no-gutters mt-5 my-5 ml-5 shadow rounded" style="background-color: ;">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $image; ?>" class="card-img border" alt="...">
            </div>
            <div class="caption col-md-8">
                <div class="card-body border rounded" style="width: 100%; height: 100%; background: linear-gradient(to right, white, ghostwhite, #ccc, #ccc); ">
                    <div class="mt-3 ml-5">
                        <h4 class="card-title">Informasi Profil</h4><br>
                        <p class="card-title text-disable">Nama : <?= $user; ?></p>
                        <p class="card-title">Email : <?= $email; ?></p>
                        <p class="card-title">Alamat : <?= $alamat; ?></p>
                        <p class="card-title">Menjadi member sejak : <?= date('d F Y', $tanggal_input); ?></p><br>
                        <a class="btn btn-warning shadow" href="<?= base_url('member/ubahprofil'); ?>"><i class="fas fa-user-edit"></i> Ubah Profile</a>
                        <a class="btn btn-dark" href="<?= base_url(); ?>"><i class="fas fa-reply"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
