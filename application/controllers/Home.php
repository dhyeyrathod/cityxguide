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
	public function get_city_ajax()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST' && $this->input->post('country_id')) {
			$this->country_id = $this->security->xss_clean($this->input->post('country_id'));
			$this->response = $this->website->getCitiesByCountryId($this->country_id);
			if (count($this->response) > 0) {
				echo json_encode(array('status' => 'success','country_data' => $this->response));
			} else {
				echo json_encode(array('status' => 'failure'));
			}
		}
	}
}