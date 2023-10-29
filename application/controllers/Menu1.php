<?php
class Menu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index() {
        $this->load->view('menu_form');
    }

    public function save_menu() {
        $data = array(
            'kode_menu' => $this->input->post('kode_menu'),
            'nama_menu' => $this->input->post('nama_menu'),
            'harga' => $this->input->post('harga')
        );

        // Upload gambar
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $data['gambar'] = $this->upload->data('file_name');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }

        $this->menu_model->insert_menu($data);
        redirect('menu');
    }
}
