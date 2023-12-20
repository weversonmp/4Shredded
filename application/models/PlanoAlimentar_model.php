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

	public function getAutocompleteFood($food_name)
	{
		$res = array();

		if (isset($food_name['search'])) {
			try {
				$this->db->select('*');
				$this->db->where("food_name LIKE '%{$food_name['search']}%'");

				$records = $this->db->get("tb_foods")->result();

				foreach ($records as $row) {
					$res[] = array(
						'value' => $row->id,
						'label' => $row->food_name,
						'carb' => $row->carb,
						'prot' => $row->prot,
						'fat' => $row->fat,
						'kcal' => $row->kcal,
					);
				}

				return $res;
			} catch (Exception $e) {
				log_message('error: ', $e->getMessage());
				return;
			}
		}
	}
}
