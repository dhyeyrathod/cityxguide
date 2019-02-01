<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Video extends MY_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$this->data['videos_key'] = $this->website->getAllVideo();
		$this->load->view('video_index',$this->data);
	}
	public function details()
	{
		$video_id = $this->uri->segment(3);
		$this->data['video_data'] = $this->website->getSingleVideos($video_id);
		$this->load->view('video_details',$this->data);
	}
}