<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alimentos extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('alimentos_model');
	}

	
	public function index()
	{
		$data['alimentos'] = $this->alimentos_model->index();

		// print_r('<pre>');
		// var_dump($data['alimentos'][0]);
		// exit();
		
		$this->load->view('templates/head');
		$this->load->view('pages/alimentos', $data);
	}
}
