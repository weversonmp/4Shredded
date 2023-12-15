<?php

class PlanoAlimentar_model extends CI_Model
{
	public function __construct()
	{
	}

	public function getAllFoods()
	{
		return $this->db->get('tb_foods')->result_array();
	}
}
