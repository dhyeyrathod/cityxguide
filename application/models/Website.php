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
		$sql_str = "SELECT * FROM country ORDER BY country_name ASC";
		return $this->db->query($sql_str)->result_array();
	}
	public function getAllCountryObj()
	{
		$sql_str = "SELECT * FROM country";
		return $this->db->query($sql_str)->result();
	}
	public function getCityByCountryId($country_id)
	{
		$sql_str = "SELECT * FROM city WHERE fk_country_id = ".$this->db->escape($country_id)." ORDER BY RAND() LIMIT 5";
		return $this->db->query($sql_str)->result_array();
	}
	public function UserRegistration($data)
	{
		$sql_str = "INSERT INTO members SET username = ".$this->db->escape($data->username).",password = ".$this->db->escape($data->password).",email_id = ".$this->db->escape($data->email).",contact = ".$this->db->escape($data->contact).",created_date = NOW() , status = TRUE";
		if ($this->db->query($sql_str)) {
			return array('status' => true,'last_inserted_id'=>$this->db->insert_id());
		} else {
			return array('status' => false);
		}
	}
	public function UserAuthentication($data)
	{
		$sql_str = "SELECT * FROM members WHERE email_id = ".$this->db->escape($data->email)." AND password = ".$this->db->escape($data->password);
		return $this->db->query($sql_str)->row();
	}
	public function getUserinfoByUserId($user_id)
	{
		$sql_str = "SELECT * FROM members WHERE id = ".$this->db->escape($user_id);
		return $this->db->query($sql_str)->row();
	}
	public function getAllCountryData()
	{
		$sql_str = "SELECT * FROM country";
		return $this->db->query($sql_str)->result();
	}
	public function getCitiesByCountryId($country_id)
	{
		$sql_str = "SELECT * FROM city WHERE fk_country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->result();
	}
	public function setProfile($data,$user_id,$profile_id = 0)
	{
		if ($profile_id == 0) {
			$sql_str = "INSERT INTO profile SET title = ".$this->db->escape($data->title).",name = ".$this->db->escape($data->name).",contact = ".$this->db->escape($data->contact).",email = ".$this->db->escape($data->email).",city_id = ".$this->db->escape($data->city_id).",city_name = ".$this->db->escape($this->getCityInfoById($data->city_id)->city_name).",country_id = ".$this->db->escape($data->country_id).",country_name = ".$this->db->escape($this->getCountryInfobyCountrId($data->country_id)->country_name).",website = ".$this->db->escape($data->website_url).",age = ".$this->db->escape($data->age).",status = TRUE , created_date = NOW() , created_by = ".$this->db->escape($user_id).",descriptions = ".$this->db->escape($data->description).",fk_user_id = ".$this->db->escape($user_id);
			if ($this->db->query($sql_str)) {
				return array('status' =>true , 'last_inserted_id'=>$this->db->insert_id());
			} else {
				return array('status' =>'failure');
			}
		} else {
			$sql_str = "UPDATE profile SET title = ".$this->db->escape($data->title).",name = ".$this->db->escape($data->name).",contact = ".$this->db->escape($data->contact).",email = ".$this->db->escape($data->email).",city_id = ".$this->db->escape($data->city_id).",city_name = ".$this->db->escape($this->getCityInfoById($data->city_id)->city_name).",country_id = ".$this->db->escape($data->country_id).",country_name = ".$this->db->escape($this->getCountryInfobyCountrId($data->country_id)->country_name).",website = ".$this->db->escape($data->website_url).",age = ".$this->db->escape($data->age).",status = TRUE , created_date = NOW() , created_by = ".$this->db->escape($user_id).",descriptions = ".$this->db->escape($data->description).",fk_user_id = ".$this->db->escape($user_id)." WHERE id = ".$this->db->escape($profile_id);
			if ($this->db->query($sql_str)) {
				return array('status' =>true,'last_inserted_id'=>$profile_id);
			} else {
				return array('status' =>'failure');
			}
		}
	}
	public function getCityInfoById($city_id)
	{
		$sql_str = "SELECT id , city_name , fk_country_id , created_date , updated_date , status , (SELECT country_name FROM country WHERE id = city.fk_country_id) AS country_name FROM city WHERE id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->row();
	}
	public function getCountryInfoById($country_id)
	{
		$sql_str = "SELECT * FROM country WHERE id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->row();
	}
	public function getCountryInfobyCountrId($country_id)
	{
		return $this->db->get_where('country', array('id' => $country_id))->row();
	}
	public function setProfileImages($file_name,$porifile_id)
	{
		$sql_str = "INSERT INTO profile_images SET image_name = ".$this->db->escape($file_name).",fk_profile_id = ".$this->db->escape($porifile_id).",alt_tag = ".$this->db->escape($this->config->item('site_name'));
		$this->db->query($sql_str);
	}
	public function getAllAddPostByUser($user_id)
	{
		$sql_str = "SELECT COUNT(*) AS total_post FROM profile WHERE fk_user_id = ".$this->db->escape($user_id);
		return $this->db->query($sql_str)->row();
	}
	public function getUserDetailsById($user_id)
	{
		$sql_str = "SELECT * FROM members WHERE id = ".$this->db->escape($user_id);
		return $this->db->query($sql_str)->row();
	}
	public function getAllUserProfileByUserId($user_id)
	{
		$sql_str = "SELECT profile.id as id , title , country_name , city_name , (SELECT image_name FROM profile_images WHERE fk_profile_id = profile.id LIMIT 1) AS image_name , created_date FROM profile WHERE fk_user_id = ".$this->db->escape($user_id);
		return $this->db->query($sql_str)->result();
	}
	public function getAllProfileByCityId($city_id , $limit , $offset = 0)
	{
		$sql_str = "SELECT * FROM profile WHERE city_id = ".$this->db->escape($city_id)." AND status = true LIMIT $limit";
		if ($offset != 0) {
			$sql_str .= " OFFSET $offset";
		}	
		return $this->db->query($sql_str)->result();
	}
	public function getCountprofileByCity($city_id)
	{
		$sql_str = "SELECT COUNT(*) AS total_profile FROM profile WHERE city_id = ".$this->db->escape($city_id)." AND status = true";
		return $this->db->query($sql_str)->row();
	}
	public function getProfileInfoById($profile_id)
	{
		$sql_str = "SELECT profile.id AS id , profile.title AS title , profile.country_id AS country_id , profile.city_id AS city_id , profile.name AS name , profile.contact AS contact , profile.email AS email , profile.city_name AS city_name , (SELECT country_name FROM country WHERE id = profile.country_id) AS country_name , profile.website AS website , profile.age AS age , profile.created_date as created_date , profile.descriptions as descriptions, members.username as username , members.email_id as email_id , members.contact as user_contact FROM profile INNER JOIN members ON profile.fk_user_id = members.id WHERE profile.id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str)->row();
	}
	public function getProfileImagesById($profile_id)
	{
		$sql_str = "SELECT * FROM profile_images WHERE fk_profile_id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str)->result();
	}
	public function DeletePofileById($profile_id)
	{
		$sql_str = "DELETE FROM profile WHERE id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str);
	}
	public function getProfileByCountryId($country_id ,$limit , $offset = 0)
	{
		$sql_str = "SELECT * FROM profile WHERE country_id = ".$this->db->escape($country_id)." AND status = true LIMIT $limit";
		if ($offset != 0) {
			$sql_str .= " OFFSET $offset";
		}
		return $this->db->query($sql_str)->result();
	}
	public function getCountProfileByCounry($country_id)
	{
		$sql_str = "SELECT * FROM profile WHERE country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getUserInfoByEmail($email)
	{
		return $this->db->get_where('members', array('email_id' => $email))->row();
	}
	public function getCountryInfoByCityId($city_id)
	{
		$sql_str = "SELECT fk_country_id as id , country.country_name as country_name FROM city INNER JOIN country ON country.id = city.fk_country_id WHERE city.id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->row();
	}
}