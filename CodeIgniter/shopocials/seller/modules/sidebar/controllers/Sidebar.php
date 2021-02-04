<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sidebar extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
            
		//load view 
		$theme = $this->session->userdata('admin_theme');

		if (file_exists(APPPATH . 'views/themes/' . $theme . '/template/common/sidebar')) {
			$this->load->view('themes/' . $theme . '/template/common/sidebar', $data);
		} else {
			$this->load->view('themes/default/template/common/sidebar', $data);
			
		}
	}
	
	

}

/* End of file Sidebar.php */
/* Location: ./application/controllers/Sidebar.php */