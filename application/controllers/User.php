<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){

		$data['konten']="home";
		$this->load->view('template',$data);
	}

	public function Profil(){
		$data['konten']="v_profil";
		$this->load->view('template', $data);
	}
	public function gallery(){
		$data['konten']="gallery";
		$this->load->view('template', $data);
	}
	public function event(){
		$data['konten']="event";
		$this->load->view('template', $data);
	}
	public function contact(){
		$data['konten']="contact";
		$this->load->view('template', $data);
	}
	public function about(){
		$data['konten']="about";
		$this->load->view('template', $data);
	}
}
?>