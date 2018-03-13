<?php


  /**
  * 
  */
  class Admin extends CI_Controller
  {
  	
  	function __construct()
  	{
  		parent:: __construct();
  		$this->load->model('queries','m');
  		$this->load->library('session');
  	}

  	public function index(){

  		$this->load->view('templates/header');
		  $this->load->view('admin/login');
		  $this->load->view('templates/footer');

  	}

    public function home(){
      $this->load->view('templates/header');
      $this->load->view('admin/home');
      $this->load->view('templates/footer');
    }

     public function discounts(){
      $this->load->view('templates/header');
      $this->load->view('admin/discounts');
      $this->load->view('templates/footer');
    }

    public function login(){
        $data = array(
          'emaillog'    => $this->input->post('logemail'),
          'passwordlog' => $this->input->post('logpwd') 
        );

        $result = $this->m->login($data);
        if($result){
       echo 'success';   
        }else{
          return false;
        }
    }

    public function insertProd(){
      $data = array(
          'prod_code'     => $this->genProdcode(),
          'prod_name'     => $this->input->post('prodName'),
          'prod_items'    => $this->input->post('quantity'),
          'prod_price'    => $this->input->post('price'),
          'prod_descrip'  => $this->input->post('prodDes'),
          'prod_category' => $this->input->post('selCat')

      );

      $result = $this->m->insertProd($data);
      if($result){
        echo "success";
      }else{
        return false;
      }
    }


    public function updateProd(){
      $code = $this->input->post('prodCode');
      $data = array(
          'prod_name'    => $this->input->post('edName'),
          'prod_items'   => $this->input->post('edquantity'),
          'prod_price'   => $this->input->post('edprice'),
          'prod_descrip' => $this->input->post('edDes'),
          'prod_category'=> $this->input->post('edselCat')
      );

      $result = $this->m->updateProduct($code,$data);
      if($result){
         echo "success";
      }else{
        return false;
      }


    }

    public function deleteProd($code){
      $res = $this->m->delProd($code);
      if($res){
        echo "success";
      }else{
        return false;
      }
    }

     public function showSelprod($cat){
      if($cat == "All"){
        $res = $this->m->getProd();
        echo json_encode($res);
      }else{
        $res = $this->m->getSelProd($cat);
        echo json_encode($res);
     }
    }


    public function genProdcode(){
       $length = 6;
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $charactersLength = strlen($characters);
       $randomString = '';
       for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
       }
       return $randomString;
    }

    public function uploadImage(){
      
    }
  
  }