<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class doing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array('uname' => 'test2','ukey' => 'test2key','email'=>'test2@localhost' );
		$this->load->database();
		$this->load->model('mdoing', 'mdo');
		$query=$this->mdo->userInsert($data);
		if ($query) {
			echo "success";
		}
	}

}

/* End of file doing.php */
/* Location: ./application/controllers/doing.php */