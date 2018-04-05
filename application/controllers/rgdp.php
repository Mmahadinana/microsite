<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This Rgdp controller is responsible for launching the microsite 
 */
class Rgdp extends CI_Controller {

	/**
	 * [index this method will load the page the first time
	 */
	public function index()
	{	
		$data['pageToLoad'] = 'rgdp/rgdp';
        $data['pageActive'] = 'rgdp'; 
        $data['private_data'] = $this->politica_privacidade();
        //var_dump($datas);
		$this->load->view('ini',$data);
	}//end of index

	/**
	 * politica_privacidade method will have an array which will data relating to politica privacidade
	 * this method will return an array to the caller
	 * this array has the key, title, and body of panel 
	 * @return [array] with all the data needed for the printing on the view
	 */
	public function politica_privacidade()
	{

		$private_data = [
			'data1'=>["Política de Privacidade e Tratamento de dados",
					"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data2'=>["O que abrange esta Política de Privacidade?",
					"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data3'=>["Qual a ﬁnalidade do tratamento de dados?",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data4'=>["Quem é o responsável pelo tratamento dos seus dados?",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data5'=>["Que tipo de dados pessoais são recolhidos?",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data6'=>["Quando e como recolhemos os seus dados?",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data7'=>["Por quanto tempo serão conservados os seus dados pessoais?",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data8'=>["Direitos dos Titulares dos Dados",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data9'=>["Direito de portabilidade dos seus dados pessoais",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data10'=>["Quais as medidas adotadas para garantir a segurança dos seus dados pessoais?",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data11'=>["Alterações à Política de Privacidade",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data12'=>["Proteção da Privacidade das crianças",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data13'=>["Questões e Sugestões",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."],
			'data14'=>["Subscrição de newsletters",
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."]
		];
        
		return $private_data;
	}//end politica_privacidade

}//end of controller
