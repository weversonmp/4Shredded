<?php

class Alimentos_model extends CI_Model {
	public function __construct() {

	}

	public function index()
	{
		return $this->db->get('alimentos')->result_array();
		
	}
}