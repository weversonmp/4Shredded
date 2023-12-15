<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlanoAlimentar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$alimentos = $this->load->model('PlanoAlimentar_model');
	}


	public function index()
	{
		$data['title'] = "Plano Alimentar";
		$this->load->view('pages/planoAlimentar', $data);
	}
}
