<?php
 class Biodata extends CI_Controller
{
    public function index(){
        $this->load->view['v_form_bio'];
    }
    public function cetak(){
        $data = [
            'nim' => $this->input->post('nim'),
            'nim' => $this->input->post('nama'),
            'nim' => $this->input->post('prodi')
        ];
        $this->load->view('v_form_bio', $data);
    }
}