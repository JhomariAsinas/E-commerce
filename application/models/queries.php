<?php  


/**
* 
*/
class Queries extends CI_Model{

//Checking the Data of Admi in the Database
public function login($data){
  	$condition = "username =" . "'" . $data['emaillog'] . "' AND " . "password =" . "'" . $data['passwordlog'] . "'";
  	$this->db->select('*');
  	$this->db->from('admin');
  	$this->db->where($condition);

	$query = $this->db->get();
	  if($query->num_rows() > 0){
	    return true;
	  }else{
	    return false;
	 }

}
//Getting the Data of Admin in the Database
public function getAdmin(){

   $result = $this->db->get('admin');
   if($result->num_rows() > 0){
      return $result->result_array();
   }else{
      return false;
   }

}
//Inserting the Product on the Database
public function insertProd($data){
   
   $query = $this->db->insert('product_db',$data);
   if($query){
   	 return 'success';
   }else{
   	 return false;
   }

}
//Getting all the Product on the Database
public function getProd(){

   $query = $this->db->get('product_db');
   if($query->num_rows() > 0){
   	return $query->result();
   }else{
   	return false;
   }

}
//Getting Product with specific Category
public function getSelProd($cat){
   $condition = "prod_category =" . "'" . $cat ."'";
   $this->db->select('*');
   $this->db->from('product_db');
   $this->db->where($condition);

   $query = $this->db->get();
   if($query->num_rows() > 0){
   	return $query->result();
   }else{
   	return false;
   }

}
//Update the data on the database of the specific Product
public function updateProduct($code,$data){
   $this->db->where('prod_code',$code);
   
   $query = $this->db->update('product_db',$data);
   if($query){
   	 echo 'success';
   }else{
   	 return false;
   }

}
// Deleting the data of the specific data on the Database
public function delProd($code){
   $this->db->where('prod_code',$code);
   
   $res = $this->db->delete('product_db');
   if($res){
   	return true;
   }else{
   	 return false;
   }

}

// Getting the data of the Product with Gadgets Category
public function getGad(){
   $this->db->where('prod_category',"Gadgets");

   $res = $this->db->get('product_db');
   if($res->num_rows() > 0){
      return $res->result();
   }else{
      return false;
   }

}
// Getting the data of the Product with Clothings Category
public function getCloth(){
   $this->db->where('prod_category',"Clothings");

   $res = $this->db->get('product_db');
   if($res->num_rows() > 0){
      return $res->result();
   }else{
      return false;
   }

}
// Getting the data of the Product with Furniture Category
public function getFurniture(){
   $this->db->where('prod_category',"Furniture");

   $res = $this->db->get('product_db');
   if($res->num_rows() > 0){
      return $res->result();
   }else{
      return false;
   }

}
// Getting the data of the Product with Food Category
public function getFood(){
   $this->db->where('prod_category',"Foods");

   $res = $this->db->get('product_db');
   if($res->num_rows() > 0){
      return $res->result();
   }else{
      return false;
   }
}


}


?>