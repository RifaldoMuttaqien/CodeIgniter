<?php 

class Contoh1 extends CI_Controller {

public function index()
	{
		$data['Kampus']= 'dikampus BSI';
		$this->load->view('contoh',$data);
	}
}