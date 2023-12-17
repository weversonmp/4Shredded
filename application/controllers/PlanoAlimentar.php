<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlanoAlimentar extends CI_Controller
{
	public $teste;
	public $food_name = '';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PlanoAlimentar_model', 'alimentos');
		$this->teste = $this->alimentos->getAutocompleteFood();
	}


	public function index()
	{
		// echo '<pre>';
		// print_r($teste);
		// exit;

		$data['title'] = "Plano Alimentar";
		$data['tb_foods'] = $this->alimentos->getAllFoods();
		$data['alimentosAdicionados'] = '';
		$this->load->view('pages/planoAlimentar_view', $data);
	}
}
