<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rgdp extends CI_Controller {

	public function index()
	{
		$data['pageToLoad']='laws/laws';
		//$data['pageActive']='laws';
		$this->load->view('ini',$data);
		
	}
}
