<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class fmfTourController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
       //$this->load->helper('basicMethod');
       //$this->load->library('session');
    }

    public function tour_details_func() {

//        echo'fmf tour';

        $this->load->model("tour_package/fmfTourModel");
//
////        //gets the hotel name from the url
//       $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//       $segments = end(split('/', $_SERVER['REQUEST_URI_PATH']));
//       $hotel_name = str_replace("-", " ", $segments);
//        $hotelName = str_replace("-", " ", $segments);
//
//        $data1 = array(
//            'tour_name' => $tour_name,
//        );
//
      $tourIDArr = $this->fmfTourModel->tour_info(1);

      $data = array(
           'tour_id' => $tourIDArr[0]['id'],
            'tour_name'=> $tourIDArr[0]['tour_name']           
        );
      
       $tourCity = $this->fmfTourModel->tour_city($data);

      $package = $this->fmfTourModel->package(1);
           
      $packageOption = $this->fmfTourModel->package_option(1);
           
      $tourItineraries = $this->fmfTourModel->tour_itineraries();
      
      $packageInclusive = $this->fmfTourModel->package_inclusive();
      
      $tour_inclusive = $this->fmfTourModel->tour_inclusive(1);
      
      
      
      
       
      $data2 = array(
          'city_code'=>$tourCity[0]['city_code'],
          'city_name'=>$tourCity[0]['city_name']
      );
      
      
      $package_details = array(
          'pack_title' => $package[0]['pack_title'],
          'pack_descript'=> $package[0]['pack_descript'],
          'regular_pack_rate'=>$packageOption [0]['regular_pack_rate'],
          'fmf_discount_pre'=> $packageOption[0]['fmf_discount_pre'],
          'pack_occupancy'=> $packageOption[0]['pack_occupancy']
              
      );
      
      $data3 = array(
          'tour_id' => $tourIDArr[0]['id'],
           'tour_name'=> $tourIDArr[0]['tour_name'],
           'city_code'=>$tourCity[0]['city_code'],
          'city_name'=>$tourCity[0]['city_name'],
          'description' => $tourIDArr[0]['description'],
          'package_details' => $package_details,
          'package'=>$package,
          'inclusive_descript' => $tour_inclusive[0]['inclusive_descript']
          
      );
      
      
       $this->load->view('tour_Package/fmfTourView', $data3);
        
        
        
        }
}
