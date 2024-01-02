<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'controllers\BaseController.php';

class PlanoAlimentar extends BaseController
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
		$data['foodSeted'] = array(
			"foodIndex" => [1,2,3,4],
		);
		$this->load->view('pages/planoAlimentar_view', $data);
		$this->load->view('templates/autocomplete_function', $data);
		$this->load->view('templates/addFoodPlan_function', $data);
	}

	public function foodsAutoComplete()
	{
		$food_name = $this->input->post();

		$res = $this->alimentos->getAutocompleteFood($food_name);

		echo json_encode($res);
	}
}
