<?php 
/**
 * @author Jay rathod
 */
class Friend
{
	public function base64url_encode($data) { 
	  	return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
	} 
	public function base64url_decode($data) { 
	  	return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
	}
	public function profileImageUploadConfig()
	{
		$config['upload_path'] = './profile_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE ;
		return $config ;
	}
	public function pagination_style()
	{
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
	    return $config ;
	}
}