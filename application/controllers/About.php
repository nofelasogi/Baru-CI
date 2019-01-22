<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {
	public function index(){
		$data['konten']="about";
		$this->load->view('template', $data);
	}
}
?>