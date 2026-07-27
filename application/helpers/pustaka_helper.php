<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<div class="alert tombol-alert" role="alert">*Silahkan login terlebih dahulu</div>');
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $id_user = $ci->session->userdata('id_user');
    }
}

function cek_user()
{
    $ci = get_instance();
    $role_id = $ci->session->userdata('role_id');
    if ($role_id != 1) {
        $ci->session->set_flashdata('pesan', '<div class="alert tombol-alert" role="alert">*Anda sudah Login!!</div>');
        redirect('home');
    }
}

// Tambahkan skrip JavaScript untuk mengatur pesan hanya ditampilkan selama 5 detik
echo '<script>
    setTimeout(function(){
        $(".alert").hide(); // Sembunyikan pesan setelah 5 detik
    }, 3000); // 3000 milidetik = 3 detik
</script>';
