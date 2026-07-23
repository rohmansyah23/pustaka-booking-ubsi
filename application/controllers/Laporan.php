<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function laporan_buku() {
        // Memuat data untuk tampilan laporan buku
        $data['judul'] = 'Laporan Data Buku';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        // Memuat view yang diperlukan
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('buku/laporan_buku', $data);
        $this->load->view('admin/footer');
    }

    public function cetak_laporan_buku() {
        // Memuat data untuk cetak laporan buku
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        // Memuat view cetak laporan buku
        $this->load->view('buku/laporan_print_buku', $data);
    }

    public function laporan_buku_pdf() {
        // Memuat data untuk laporan buku PDF
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        
        // Memuat library TCPDF
        $this->load->library('tcpdf');
        $pdf_content = $this->load->view('buku/laporan_pdf_buku', $data, true);

        // Mengatur informasi PDF
        $this->tcpdf->SetCreator(PDF_CREATOR);
        $this->tcpdf->SetAuthor('Muhammad Rohman Syah');
        $this->tcpdf->SetTitle('Laporan Data Buku');
        $this->tcpdf->SetSubject('Laporan Data Buku');
        $this->tcpdf->SetKeywords('Lapor, Buku, PDF');
        
        // Memuat konten HTML ke TCPDF
        $this->tcpdf->AddPage('L', 'mm', 'A4');
        $this->tcpdf->SetFont('', '', 14);

        // Menulis konten HTML dengan lebar kolom yang disesuaikan
        $this->tcpdf->writeHTML($pdf_content, true, false, true, false, '');

        // Mengeluarkan PDF
        $this->tcpdf->Output("laporanbuku.pdf");
    }

    public function export_excel() {
        // Memuat data untuk cetak laporan buku
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        // Memuat view cetak laporan buku
        $this->load->view('buku/export_excel_buku', $data);
    }

    public function laporan_pinjam() {
    $data['judul'] = 'Laporan Data Peminjaman';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['laporan'] = $this->db->query("SELECT * FROM pinjam p, detail_pinjam d, buku b, user u WHERE d.id_buku = b.id AND p.id_user = u.id AND p.no_pinjam = d.no_pinjam")->result_array();

    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar', $data);
    $this->load->view('pinjam/laporan-pinjam', $data);
    $this->load->view('admin/footer');
}
    public function cetak_laporan_pinjam() {
    // Memuat data untuk cetak laporan buku
    $data['laporan'] = $this->db->query("SELECT * FROM pinjam p, detail_pinjam d, buku b, user u WHERE d.id_buku = b.id AND p.id_user = u.id AND p.no_pinjam = d.no_pinjam")->result_array();

    // Memuat view cetak laporan buku
    $this->load->view('pinjam/laporan-print-pinjam', $data);
}

    public function laporan_pinjam_pdf() {
        // Memuat data untuk laporan buku PDF
         $data['laporan'] = $this->db->query("SELECT * FROM pinjam p, detail_pinjam d, buku b, user u WHERE d.id_buku = b.id AND p.id_user = u.id AND p.no_pinjam = d.no_pinjam")->result_array();
        
        // Memuat library TCPDF
        $this->load->library('tcpdf');
        $pdf_content = $this->load->view('pinjam/laporan-pdf-pinjam', $data, true);

        // Mengatur informasi PDF
        $this->tcpdf->SetCreator(PDF_CREATOR);
        $this->tcpdf->SetAuthor('Muhammad Rohman Syah');
        $this->tcpdf->SetTitle('Laporan Data Pinjam');
        $this->tcpdf->SetSubject('Laporan Data Pinjam');
        $this->tcpdf->SetKeywords('Lapor, Pinjam, PDF');
        
        // Memuat konten HTML ke TCPDF
        $this->tcpdf->AddPage('L', 'mm', 'A4');
        $this->tcpdf->SetFont('', '', 12);

        // Menulis konten HTML dengan lebar kolom yang disesuaikan
        $this->tcpdf->writeHTML($pdf_content, true, false, true, false, '');

        // Mengeluarkan PDF
        $this->tcpdf->Output("laporanpinjam.pdf");
    }

    public function export_excel_pinjam() {
        // Memuat data untuk cetak laporan buku
        $data['laporan'] = $this->db->query("SELECT * FROM pinjam p, detail_pinjam d, buku b, user u WHERE d.id_buku = b.id AND p.id_user = u.id AND p.no_pinjam = d.no_pinjam")->result_array();

        // Memuat view cetak laporan buku
        $this->load->view('pinjam/export_excel_pinjam', $data);
    }

}
