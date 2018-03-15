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

	public function gadgets(){
		$this->load->view('templates/header');
		$this->load->view('mainpage/gadgets');
		$this->load->view('templates/footer');

	}

	public function furniture(){
		$this->load->view('templates/header');
		$this->load->view('mainpage/furniture');
		$this->load->view('templates/footer');

	}

	public function clothings(){
		$this->load->view('templates/header');
		$this->load->view('mainpage/clothings');
		$this->load->view('templates/footer');

	}

	public function food(){
		$this->load->view('templates/header');
		$this->load->view('mainpage/foods');
		$this->load->view('templates/footer');

	}

	//Get all product that has "Gadgets" category
	public function getGad(){
		$res = $this->m->getGad();
		echo json_encode($res);
	}

	//Get all product that has "Furniture" category
	public function getFur(){
		$res = $this->m->getFurniture();
		echo json_encode($res);
	}

	//Get all product that has "Clothing" category
	public function getClothing(){
		$res = $this->m->getCloth();
		echo json_encode($res);
	}

	//Get all product that has "Foods" category
	public function getFoods(){
		$res = $this->m->getFood();
		echo json_encode($res);
	}
}



?>