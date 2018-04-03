<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rgdp extends CI_Controller {

	public function index()

	{	
		$data['pageToLoad'] = 'laws/laws';
        $data['pageActive'] = 'laws'; 
		$this->load->view('ini',$data);

	}

	/*public function landing()

	{	
		$data['pageToLoad'] = 'landing/landing';
        $data['pageActive'] = 'landing'; 
		$this->load->view('ini',$data);

	}*/
}
