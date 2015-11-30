<?php

if (!defined('BASEPATH')){
    exit('No direct script access allowed');
}


class hotel_hot_deals extends CI_Controller {

    public function index() {


        /*
         *  META TAGBS
         */
        $data = array('page_title' => 'Hotel Hot Deals | Special Hotel Rates | Findmyfare',
            'meta_keywords' => 'Sri Lanka hotels, Sri Lanka holiday deals, Cheap hotel deals, Holiday hot deals, 9yZnKaacnSOXpBNvJci0GPB-OlQ',
            'meta_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.',
            'og_url' => base_url("hotel-hot-deals"),
            'og_image' => '',
            'og_title' => 'Hotel Hot Deals | Special Hotel Rates | Findmyfare',
            'og_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.'
        );


        $this->load->view('template/header', $data );
       
        $this->load->view('hot-deal-ui/angular/app',$data);

        $this->load->view('template/footer');
    }
    
     public function v2() {

        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");


        /*
         *  META TAGBS
         */
        $data = array('page_title' => 'Hotel Hot Deals | Special Hotel Rates | Findmyfare',
            'meta_keywords' => 'Sri Lanka hotels, Sri Lanka holiday deals, Cheap hotel deals, Holiday hot deals, 9yZnKaacnSOXpBNvJci0GPB-OlQ',
            'meta_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.',
            'og_url' => base_url("hotel-hot-deals"),
            'og_image' => '',
            'og_title' => 'Hotel Hot Deals | Special Hotel Rates | Findmyfare',
            'og_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.'
        );


        $this->load->view('template/header', $data);

        $this->load->view('hot-deal-ui/angular/v2/app', $data);

        $this->load->view('template/footer');
    }
    
  

}
