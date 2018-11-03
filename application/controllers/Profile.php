<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rahtod
*/
class Profile extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function cities()
	{
		$city_id = $this->friend->base64url_decode($this->uri->segment(2));
		$this->data['city_info'] = $this->website->getCityInfoById($city_id);
		$this->data['city_profiles_key'] = $this->website->getAllProfileByCityId($city_id);
		$this->load->view('profile_city_view',$this->data);
	}
	public function details()
	{
		$profile_id = $this->friend->base64url_decode($this->uri->segment(4));
		$this->data['profile_data'] = $this->website->getProfileInfoById($profile_id);
		$this->data['image_key'] = $this->website->getProfileImagesById($profile_id);
		$this->load->view('profile_details_view',$this->data);
	}
}