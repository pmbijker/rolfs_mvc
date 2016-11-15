<?php
class Controller {
	public $load;
	public $model;

	function __construct(){
		$this->load = new Load();
		$this->model = new Model();
		
		// Determine what page you are one
		$this->home();

		// Tegelijk de About pagina tonen (misschien wat overdreven)
		$this->about();
	}

	function home(){
		$this->load->view('header.php');
		$data = $this->model->user_info();
		$this->load->view('home.php', $data);
		$this->load->view('footer.php');
	}

	function about(){
		$this->load->view('header.php');
		$data = $this->model->user_info();
		$this->load->view('about.php', $data);
		$this->load->view('footer.php');
	}
}