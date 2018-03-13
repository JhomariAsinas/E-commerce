<?php

/**
* 
*/
class Main extends CI_Controller
{
	
	function __construct()
	{
	    parent:: __construct();
  		$this->load->model('queries','m');
  		
	}

	public function store(){
		$this->load->view('templates/header');
		$this->load->view('mainpage/homepage');
		$this->load->view('templates/footer');

	}
}



?>