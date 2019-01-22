<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index(){
		$data['konten']="contact";
		$this->load->view('template', $data);
	}
}
?>