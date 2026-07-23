<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                <h1>Buat Akun</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Gunakan alamat email untuk registrasi.</span>
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <?= $this->session->flashdata('pesan'); ?>
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Gunakan alamat email untuk registrasi.</span>
                <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <a href="#">Lupa password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hai, Temanku!</h1>
                    <p>Sudah mempunyai akun? Silahkan login.</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Selamat Datang!</h1>
                    <p>Daftar sekarang untuk mengakses semua fitur Website Pustaka Booking.</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>