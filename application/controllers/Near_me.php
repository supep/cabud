<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Near_me extends CI_Controller {

	public function index()
	{
		$data['konten'] = 'near_me';
		$this->load->view('page', $data);
	}

}

/* End of file Near_me.php */
/* Location: ./application/controllers/Near_me.php */