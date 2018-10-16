<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$this->data['temp'] = array();
		foreach ($this->website->getAllCountry() as $country_data) {
			$country_data['cities'] = $this->website->getCityByCountryId($country_data['id']);
			array_push($this->data['temp'],$country_data);
		}
		$this->data['location_data_key'] = json_decode(json_encode($this->data['temp']));
		$this->load->view('home_view',$this->data);
	}
}