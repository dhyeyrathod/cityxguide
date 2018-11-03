<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Accounts extends MY_Controller
{
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
		if (!$this->session->userdata('user_id')) : redirect('authentication/login') ; endif ;
	}
	public function dashboard()
	{
		$this->data['user_info_data'] = $this->website->getUserinfoByUserId($this->session->userdata('user_id'));
		$this->load->view('dashboard_view',$this->data);
	}
	public function add_new_post()
	{
		if ($this->input->server('REQUEST_METHOD') && $this->form_validation->run('profile')) {
			$this->name = $this->security->xss_clean($this->input->post('name'));		
			$this->email = $this->security->xss_clean($this->input->post('email'));		
			$this->title = $this->security->xss_clean($this->input->post('title'));		
			$this->contact = $this->security->xss_clean($this->input->post('contact'));		
			$this->website_url = $this->security->xss_clean($this->input->post('website'));		
			$this->country_id = $this->security->xss_clean($this->input->post('country_id'));		
			$this->city_id = $this->security->xss_clean($this->input->post('city_id'));		
			$this->age = $this->security->xss_clean($this->input->post('age'));		
			$this->description = $this->security->xss_clean($this->input->post('description'));
			$this->respons = $this->website->setProfile($this,$this->session->userdata('user_id'));
			if ($this->respons['status']) {
				for ($i = 0 ; $i < count($_FILES['profile_image']['name']) ; $i++) {
					$_FILES['file']['name']     	= $_FILES['profile_image']['name'][$i];
	                $_FILES['file']['type']     	= $_FILES['profile_image']['type'][$i];
	                $_FILES['file']['tmp_name'] 	= $_FILES['profile_image']['tmp_name'][$i];
	                $_FILES['file']['error']     	= $_FILES['profile_image']['error'][$i];
	                $_FILES['file']['size']     	= $_FILES['profile_image']['size'][$i];
	                $this->load->library('upload', $this->friend->profileImageUploadConfig());
	                if ($this->upload->do_upload('file')) {
	                	$this->website->setProfileImages($this->upload->data('file_name'),$this->respons['last_inserted_id']);
	                }
				}
				$this->session->set_flashdata('success','Profile created successfully..!!!!');
				redirect('accounts/add_new_post');
			} 
		} 
		$this->data['all_country_key'] = $this->website->getAllCountryData();
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->data['user_add_posted'] = $this->website->getAllAddPostByUser($this->session->userdata('user_id'));
		$this->load->view('add_new_post_view',$this->data);
	}
	public function user_profiles()
	{
		$this->user_data['user_info'] = $this->website->getUserDetailsById($this->session->userdata('user_id'));
		$this->data['user_add_posted'] = $this->website->getAllAddPostByUser($this->session->userdata('user_id'));
		$this->data['user_profiles_key'] = $this->website->getAllUserProfileByUserId($this->user_data['user_info']->id);
		if ($this->data['user_add_posted']->total_post == 0) :
			$this->session->set_flashdata('success','Profile is not present in your account..!!! please Create new Profile');redirect('accounts/user_profiles');endif ;
		$this->load->view('user_profiles_view',$this->data);
	}
	public function delete_profile()
	{
		$profile_id = $this->friend->base64url_decode($this->uri->segment(3));
		$this->website->DeletePofileById($profile_id);
		$this->session->set_flashdata('success','Profile Delete successfully..!!!');
		redirect('accounts/user_profiles');
	}
	public function editProfile()
	{
		$profile_id = $this->friend->base64url_decode($this->uri->segment(3));
		$this->data['profile_info'] = $this->website->getProfileInfoById($profile_id);
		// echo "<pre>";
		// print_r($this->data['profile_info']);
		// exit();	
		$this->data['profile_image'] = $this->website->getProfileImagesById($profile_id);
		$this->data['all_country_key'] = $this->website->getAllCountryData();
		$this->data['user_add_posted'] = $this->website->getAllAddPostByUser($this->session->userdata('user_id'));
		$this->load->view('edit_profile_view',$this->data);
	}
}