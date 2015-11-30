<?php

class fmfTourModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tour_info($id) {
       
       $stmtGetId = $this->db->conn_id->prepare("SELECT * FROM ftp_tour_info where id=?");
       $stmtGetId->bindValue(1, $id);
       $stmtGetId->execute();
       $tourIDArr = $stmtGetId->fetchAll(PDO::FETCH_ASSOC);
       return $tourIDArr;

    }
    
      public function tour_city($data) {

        $stmt = $this->db->conn_id->prepare("SELECT * from ftp_cities WHERE id=?");
        $stmt->bindValue(1, $data['tour_id']);
        $stmt->execute();
        $ftpCity = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $ftpCity;
    }
    
    public function package($data){
    
        $stmt = $this->db->conn_id->prepare("SELECT * from ftp_pack_basis");
        //$stmt->bindValue(1, $data);
        $stmt->execute();
        $ftpCity = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $ftpCity;
    }    
    
    
     public function package_option($data){
    
        $stmt = $this->db->conn_id->prepare("SELECT * from ftp_package_options where id =?");
        $stmt->bindValue(1, $data);
        $stmt->execute();
        $package_option = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $package_option;
    } 
    
 
    public function tour_inclusive($data){
    
        $stmt = $this->db->conn_id->prepare("SELECT * from ftp_tour_inclusive where tour_id= ?");
        $stmt->bindValue(1, $data);
        $stmt->execute();
        $tour_inclusive = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $tour_inclusive;
    } 
    
    public function tour_itineraries(){
    
        $stmt = $this->db->conn_id->prepare("SELECT * from ftp_tour_itineraries");
        //$stmt->bindValue(1, $data2['hotel_id']);
        $stmt->execute();
        $tour_itineraries = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $tour_itineraries;
    }
    
    
       public function package_inclusive(){
    
        $stmt = $this->db->conn_id->prepare("SELECT * from ftp_package_inclusive");
        //$stmt->bindValue(1, $data2['hotel_id']);
        $stmt->execute();
        $package_inclusive = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $package_inclusive;
    }
}