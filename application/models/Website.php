<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Website extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAllCountry()
	{
		$sql_str = "SELECT * FROM country";
		return $this->db->query($sql_str)->result_array();
	}
	public function getCityByCountryId($country_id)
	{
		$sql_str = "SELECT * FROM city WHERE fk_country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->result_array();
	}
}