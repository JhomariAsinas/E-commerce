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

  //Load the Login Page
  	public function index(){
      
      if($this->session->userdata('logged_in') != ''){
          redirect('admin/home');
      }else{  
  		    $this->load->view('templates/header');
		      $this->load->view('admin/login');
		      $this->load->view('templates/footer');
      }
  	
    }
  //Load the Home of Login Page
    public function home(){
      if($this->session->userdata('logged_in') != ''){
          $this->load->view('templates/header');
          $this->load->view('admin/home');
          $this->load->view('templates/footer');
      }else{
          redirect('admin/index');
      }
    }
  //Load the discounts Page
    public function discounts(){
    
      $this->load->view('templates/header');
      $this->load->view('admin/discounts');
      $this->load->view('templates/footer');
    
    }
  //Login of Admin User Controller Function
    public function login(){
      
      $data = array(
        'emaillog'    => $this->input->post('logemail'),
        'passwordlog' => $this->input->post('logpwd') 
      );
      $result = $this->m->login($data);
      if($result){
            $result = $this->m->getAdmin();
            $session = array( 'email' => $result[0]->username );
            $this->session->set_userdata('logged_in',$session);
            echo 'success';   
      }else{
          return false;
      }


    }
//Logout of Admin User Controller Function 
    public function logout(){
     
     $this->session->unset_userdata('logged_in');
     redirect('admin/index');
    
    }
//Inserting Product Controller Function
    public function insertProd(){
      
      $data = array(
          'prod_code'     => $this->genProdcode(),
          'prod_name'     => $this->input->post('prodName'),
          'prod_items'    => $this->input->post('quantity'),
          'prod_price'    => $this->input->post('price'),
          'prod_descrip'  => $this->input->post('prodDes'),
          'prod_category' => $this->input->post('selCat'),
          'prod_img'      => $this->upload()
      );
      $result = $this->m->insertProd($data);
      if($result){
        echo "success";
      }else{
        return false;
      }
    
    }
//Updating the Product Controller Function
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
//Deleting the Product Controller Function
    public function deleteProd($code,$img){
      
      $res = $this->m->delProd($code);
      if($res){
        unlink("./assets/image/".$img);
        echo "success";
      }else{
        return false;
      }
    
    }
//Getting all Product Controller Function
  public function showSelprod($cat){
    
    if($cat == "All"){
        $res = $this->m->getProd();
        echo json_encode($res);
    }else{
        $res = $this->m->getSelProd($cat);
        echo json_encode($res);
    }
  
  }

// Auto Generating Product Code Function
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
// Product Image Upload Function
  public function upload(){
    
    if(isset($_FILES["insert_file"])){
        $extension = explode('.', $_FILES['insert_file']['name']);
        $new_name = $extension[0] . '.' . $extension[1];
        $destination = './assets/image/'. $new_name;
        move_uploaded_file($_FILES['insert_file']['tmp_name'], $destination);
        $this->resizeimg($new_name);
        return $new_name;
    }

  }
//Resizing Product Image Function
  private function resizeimg($new_name){
      $config['image_library'] = 'gd2';
      $config['source_image'] = './assets/image/'.$new_name;
      $config['maintain_ratio'] = True;
      $config['width']     = 100;
      $config['height']   = 100;
      $this->load->library('image_lib', $config); 
      $this->image_lib->resize();
  }
  
  }