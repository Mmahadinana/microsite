<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rgdp extends CI_Controller {

	public function index()
	{	
		$data['pageToLoad'] = 'rgdp/rgdp';
        $data['pageActive'] = 'rgdp'; 
		$this->load->view('ini',$data);
	}
}
