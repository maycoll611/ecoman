<?php

class principal extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
		$this->load->view('pagina/principal');
		$this->load->view('footer');
	}

	public function inicio(){
		$this->load->view('pagina/inicio');
	}
	public function empresa(){
		$this->load->view('pagina/empresa');
	}
	public function servicios(){
		$this->load->view('pagina/servicios');
	}
	public function proyectos(){
		$this->load->view('pagina/proyectos');
	}
	public function galeria(){
		$this->load->view('pagina/galeria');
	}
	public function contactos(){
		$this->load->view('pagina/contactos');
	}
}
