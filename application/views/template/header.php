<!DOCTYPE html>
<html lang="en" class="h-100" id="page-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka-Booking | <?= $judul; ?></title>
    <link href="<?= base_url('assets/'); ?>pstk.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free-6.5.2-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #212121;">
        <div class="container">
            <div class="judul-website">
                <h3 class="mt-2"><a class="text-decoration-none" href="<?= base_url(); ?>" style="color: crimson;;" >PUSTAKA <i class="fa fa-swatchbook"></i></a></h3>
            </div>

            <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation menu" onclick="toggleNav()">
                <span class="fa fa-th-list"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-4">
        <a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda</a>
        <?php if (!empty($this->session->userdata('email'))) { ?>
            <a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
        <?php } ?>
        <a class="nav-item nav-link" href="#">Selamat Datang <b style="color:crimson;"><?= $user; ?></b></a>
    </div>
    
    <div class="navbar-tombol ml-auto">
        <?php if (!empty($this->session->userdata('email'))) { ?>
            <a class="tombol tombol-booking mr-1" href="<?= base_url('member/myprofil'); ?>"><i class="fas fa-fw fa-user-alt"></i> My Profile</a>
            <a class="tombol tombol-daftar" href="<?= base_url('member/logout'); ?>"><i class="fas fa-fw fa-sign-out-alt"></i> Sign out</a>
        <?php } else { ?>
            <a class="tombol tombol-booking mr-1" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-fw fa-sign-in-alt"></i> Sign in</a>
            <a class="tombol tombol-daftar" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fa-fw fa-regular fa-pen-to-square"></i> Register</a>
        <?php } ?>
    </div>
</div>

    </nav>
    <div class="f_boder"></div>
    <div class="container mt-3">
