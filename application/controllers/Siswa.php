<?php
class Siswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('view-form-siswa', $data);
        $this->load->view('v_footer', $data);
    }   

    public function cetak()
    {


        $this->form_validation->set_rules('jenis_hewan', 'Nis Siswa', 'required|min_length[3]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('umur', 'Nis Siswa', 'required|min_length[3]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);


        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-siswa');
        } else {
            $data = [

                'jenis_hewan' => $this->input->post('jenis_hewan'),
                'umur' => $this->input->post('umur')
            ];

            $data['judul'] = "Halaman Depan";
            $this->load->view('v_header', $data);
            $this->load->view('view-data-siswa', $data);
            $this->load->view('v_footer', $data);
        }
    }
}