<?php  


/**
* 
*/
class Queries extends CI_Model
{
	
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


   public function insertProd($data){
   	 $query = $this->db->insert('product_db',$data);
   	 if($query){
   	 	return 'success';
   	 }else{
   	 	return false;
   	 }


   }

   public function getProd(){
   	$query = $this->db->get('product_db');
   	if($query->num_rows() > 0){
   		return $query->result();
   	}else{
   		return false;
   	}
   }

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
   
   public function updateProduct($code,$data){
   	 $this->db->where('prod_code',$code);
   	 $query = $this->db->update('product_db',$data);
   	 if($query){
   	 	echo 'success';
   	 }else{
   	 	return false;
   	 }
   }

   public function delProd($code){
   	 $this->db->where('prod_code',$code);

   	 $res = $this->db->delete('product_db');
   	 if($res){
   	 	return true;
   	 }else{
   	 	return false;
   	 }
   }


}


?>