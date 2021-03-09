<?php

class inicio extends CI_Controller {
	public function index()
	{
		$this->load->view('pagina/inicio');
	}

	public function inicio(){
		
	}
	public function empresa(){
		$this->load->view('pagina/empresa');
	}
	public function servicios(){
		$this->load->view('pagina/servicios');
	}
}
