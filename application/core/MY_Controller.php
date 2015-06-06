<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

}

class SecureController extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->preConstruct();
	}

	private function preConstruct(){
		// if(!$this->session->userdata('fname'))
		// {
		// 	//$this->session->set_userdata('error','กรุณา Login ก่อน');
  //       	redirect(site_url("login/index"));
  //      	}
       	if(!$this->session->userdata('logged_in'))
		   {
		     // $session_data = $this->session->userdata('logged_in');
		     // $data['username'] = $session_data['username'];
		     // $this->load->view('home_view', $data);
		     redirect(site_url("login/index"));
		   }
       	else
       	{

       	}
	}
}

