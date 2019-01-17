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
		$this->load->library('pagination');
	}
	public function cities()
	{
		$city_id = $this->friend->base64url_decode($this->uri->segment(2));
		$this->data['city_info'] = $this->website->getCityInfoById($city_id);
		$config['base_url'] = base_url().$this->data['city_info']->city_name . "-escorts/".$this->uri->segment(2);
		$config['total_rows'] = $this->website->getCountprofileByCity($city_id)->total_profile;
		$config['per_page'] = 30; 
		$config['full_tag_open'] = '<ul class="pagination">';
 		$config['full_tag_close'] = '</ul>';
	 	$config['prev_link'] = '&lt;';
	 	$config['prev_tag_open'] = '<li>';
	 	$config['prev_tag_close'] = '</li>';
	 	$config['next_tag_open'] = '<li>';
	 	$config['next_tag_close'] = '</li>';
	 	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	 	$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
	 	$config['num_tag_close'] = '</li>';
	 	$config['next_link'] = '&gt';
	 	$config['first_link'] = FALSE;
	 	$config['last_link'] = FALSE;
		$this->pagination->initialize($config);
		$this->data['city_profiles_key'] = $this->website->getAllProfileByCityId($city_id ,$config['per_page'],$this->uri->segment(3));
		$this->data['country_key'] = $this->website->getAllCountryObj();
		$this->data['country_info'] = $this->website->getCountryInfoByCityId($city_id);
		$this->data['cities_info_key'] = $this->website->getCitiesByCountryId($this->data['country_info']->id);
		$this->load->view('profile_city_view',$this->data);
	}
	public function details()
	{
		$profile_id = $this->friend->base64url_decode($this->uri->segment(4));
		$this->data['profile_data'] = $this->website->getProfileInfoById($profile_id);
		$this->data['image_key'] = $this->website->getProfileImagesById($profile_id);
		$this->load->view('profile_details_view',$this->data);
	}
	public function country()
	{
		$country_id = $this->friend->base64url_decode($this->uri->segment(2));
		$this->data['cities_info_key'] = $this->website->getCitiesByCountryId($country_id);
		$this->data['country_info'] = $this->website->getCountryInfoById($country_id);

		$config['base_url'] = base_url() ."Escorts-". $this->data['country_info']->country_name ."/". $this->friend->base64url_encode($this->data['country_info']->id) ;
		$config['total_rows'] = $this->website->getCountProfileByCounry($country_id);
		$config['per_page'] = 30; 


		$config['full_tag_open'] = '<ul class="pagination">';
 		$config['full_tag_close'] = '</ul>';

	 	$config['prev_link'] = '&lt;';
	 	$config['prev_tag_open'] = '<li>';
	 	$config['prev_tag_close'] = '</li>';

	 	$config['next_tag_open'] = '<li>';
	 	$config['next_tag_close'] = '</li>';

	 	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	 	$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li>';
	 	$config['num_tag_close'] = '</li>';

	 	$config['next_link'] = '&gt';
	 	
	 	$config['first_link'] = FALSE;
	 	$config['last_link'] = FALSE;


		$this->pagination->initialize($config);

		$this->data['country_profiles_key'] = $this->website->getProfileByCountryId($country_id , $config['per_page'],$this->uri->segment(3));
		$this->data['country_key'] = $this->website->getAllCountryObj();
		$this->load->view('profile_country_view',$this->data);
	}
}