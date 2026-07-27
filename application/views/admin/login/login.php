<body>
    <div class="msk">
        <div class="masuk" id="masuk">
            <div class="form-masuk sign-up">
                <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                    <h1>Sign Up</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>Daftarkan akunmu menggunakan email lain.</span>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="tombol-alert pl-3">', '</small>'); ?>
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="tombol-alert pl-3">', '</small>'); ?>
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="tombol-alert pl-3">', '</small>'); ?>
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                    <?= form_error('password2', '<small class="tombol-alert pl-3">', '</small>'); ?>
                    <button type="submit" class="tombol tombol-booking">Sign Up</button>
                </form>
            </div>

            <div class="form-masuk sign-in">
                <?= $this->session->flashdata('pesan'); ?>
                <form action="<?= base_url('member'); ?>" method="post">
                    <h1>Sign In</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>Registrasi menggunakan alamat email lain.</span><br>
                    <input type="email" placeholder="Email" id="email" for="email" name="email">            
                    <input type="password" placeholder="Password" id="password" for="password" name="password">            
                    <div class="social">
                        <button type="submit" class="tombol tombol-booking">Sign In</button>
                </div>
                    </form>
            </div>
            <div class="toggle-masuk">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1 style="color: #212121;">Haiii!</h1>
                        <p>Apakah Anda sudah memiliki akun?.</p>
                        <button class="tombol tombol-kembali" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1 style="color: #212121;">Selamat Datang!</h1>
                        <p>Daftarkan akunmu di sini untuk dapat mengakses semua fitur yang tersedia di website Pustaka Booking
                        <a href="<?= base_url(); ?>"><u>Atau Kembali.</u></a></p>
                        <button class="tombol tombol-kembali" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>