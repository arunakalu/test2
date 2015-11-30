<?php
class testModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDetailsData(){
        
//        echo 'model';
        
//       $result= $this->db->conn_id->prepare("select * from details");
//       var_dump($result);
//        $query = $this->db->get('details');
//        $aa=$query->result();
//        var_dump($aa[0]);
//        return $aa;
         $result= $this->db->conn_id->prepare("select * from details");
         $result->execute();
         $data = $result->fetchAll(PDO::FETCH_ASSOC);
         return $data;
    }
    
    public function insertData(){
        
   $data = array(
   'name' => 'user3' ,
   'age' => 200
        );
   
   $this->db->insert('details', $data);
   
   $message = "sucessfully insert";
   echo $message; 
    } 
    
    
}