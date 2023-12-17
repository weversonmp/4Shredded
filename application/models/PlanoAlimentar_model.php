<?php

class PlanoAlimentar_model extends CI_Model
{
	public function __construct()
	{
	}

	public function getAllFoods()
	{
		try {
			return $this->db->get('tb_foods')->result_array();
		} catch (Exception $e) {
			log_message('error: ', $e->getMessage());
			return;
		}
	}

	public function getAutocompleteFood($food_name = '')
	{
		try {
			return $this->db->query("select * FROM tb_foods WHERE food_name LIKE '%{$food_name}%'")->result_array();
		} catch (Exception $e) {
			log_message('error: ', $e->getMessage());
			return;
		}
	}
}
