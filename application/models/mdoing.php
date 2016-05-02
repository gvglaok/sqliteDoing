<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdoing extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function userInsert($value='')
	{
		$query=$this->db->insert('userInfo', $value);
		return $query;
	}

}

/* End of file mdoing.php */
/* Location: ./application/models/mdoing.php */