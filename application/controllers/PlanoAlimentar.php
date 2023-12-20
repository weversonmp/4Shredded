<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlanoAlimentar extends CI_Controller
{
	public $food_name = '';
	public $foodReturned;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('PlanoAlimentar_model', 'alimentos');
		$this->foodReturned = $this->alimentos->getAutocompleteFood($this->food_name);
	}


	public function index()
	{
		// echo '<pre>';
		// print_r($foodReturned);
		// exit;

		$data['title'] = "Plano Alimentar";
		$data['tb_foods'] = $this->alimentos->getAllFoods();
		$data['alimentosAdicionados'] = '';
		$this->load->view('pages/planoAlimentar_view', $data);
	}

	public function foodsAutoComplete()
	{
		$food_name = $this->input->post();

		$res = $this->alimentos->getAutocompleteFood($food_name);

		echo json_encode($res);
	}
}
