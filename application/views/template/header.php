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
    <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg single-footer-sosial " style="background-color: #04091e;">
        <div class="container">
            <h1 class="mt-1"><a class="text-decoration-none" href="<?= base_url(); ?>"  style="color: #dc3545;">PUSTAKA</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
                <div class="navbar-nav mx-5"><a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a> 
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?> 
                        <a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>

                    <?php } else { ?>
                    <?php } ?> 
                    <span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span> 
                </div>

                <div class="navbar-nav ml-auto">
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?> 
                        <a class="nav-link btn m-1 btn-login text-white" href="<?= base_url('member/myprofil'); ?>"><i class="fas fa-fw fa-user-alt"></i> Profil Saya</a>
                        <a class="nav-link btn m-1 btn-danger text-white" href="<?= base_url('member/logout'); ?>"><i class="fas fa-fw fa-sign-out-alt"></i> Log out</a> 
                    <?php } else { ?>
                        <a class="nav-link btn m-1 btn-login text-white" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-fw fa-sign-in-alt"></i> Login</a>
                        <a class="nav-link btn m-1 btn-danger text-white" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fa-fw fa-file-signature"></i> Daftar</a> 
                    <?php } ?> 
                </div>

            </div>
        </div>
    </nav>
    <div class="f_boder"></div>
    <div class="container mt-3">
