<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Authentication extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function registration()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email Id','required|is_unique[members.email_id]|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('contact','Contact number','required|numeric|min_length[10]|max_length[13]');
		if ($this->input->server('REQUEST_METHOD') == 'POST' && $this->form_validation->run()) {
			$this->username = $this->security->xss_clean($this->input->post('username'));
			$this->email = $this->security->xss_clean($this->input->post('email'));
			$this->password = $this->security->xss_clean($this->input->post('password'));
			$this->contact = $this->security->xss_clean($this->input->post('contact'));
			$this->return_response = $this->website->UserRegistration($this);
			if ($this->return_response['status']) {
				$session['user_id'] = $this->return_response['last_inserted_id'];$session['username'] = $this->username ; 
				$session['email_id'] = $this->email;$session['contact'] = $this->contact ;
				$this->session->set_userdata($session);redirect('accounts/dashboard');
			}
		}
		$this->load->view('registration_view');
	}
	public function login()
	{
		$this->form_validation->set_rules('email','Email Id','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->input->server('REQUEST_METHOD') == 'POST' && $this->form_validation->run()) {
			$this->email = $this->security->xss_clean($this->input->post('email'));
			$this->password = $this->security->xss_clean($this->input->post('password'));
			$this->return_response = $this->website->UserAuthentication($this);
			if ($this->return_response) {
				$session['user_id'] = $this->return_response->id ;$session['username'] = $this->return_response->username; $session['email_id'] = $this->return_response->email_id ; $session['contact'] = $this->return_response->contact;
				$this->session->set_userdata($session);redirect('accounts/dashboard');
			}
		}
		$this->load->view('login_view');
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');$this->session->unset_userdata('username');
		$this->session->unset_userdata('email_id');$this->session->unset_userdata('contact');
		redirect('authentication/login');
	}
	public function forgot_password()
	{
		$this->form_validation->set_rules('email','Email Id','required');
		if ($this->input->server('REQUEST_METHOD') == 'POST' && $this->form_validation->run()) {
			$this->email_id = $this->security->xss_clean($this->input->post('email'));
			$this->user_info = $this->website->getUserInfoByEmail($this->email_id);
			if (valid_email($this->email_id) && count($this->user_info)) {
				$this->message = "Your Password Is : ".$this->user_info->password ;
				$this->mail_trigur_forgotpassword($this->email_id,$this->message);
				$this->session->set_flashdata('message','password has been send on your email account Plese check your email ID...!!!');
				redirect('authentication/forgot_password');
			} else {
				$this->session->set_flashdata('message','Email id dose not exist..!!!');
				redirect('authentication/forgot_password');
			}
		}
		$this->load->view('forgot_password');
	}
	private function mail_trigur_forgotpassword($email,$message)
	{	
		$this->email->from('admin@adsstone.com','Adsstone');
        $this->email->to($email);
        $this->email->subject('Adsstone password');
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        $this->email->message($message);
        return $this->email->send();
	}
}