<?php
/*
* Author: Buddhika Aruna
* Author Email: buddhika.a@findmyfare.lk 
*/
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class hotdeal_detail_con extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('basicMethod');
        $this->load->library('session');
    }

    public function index() {

        $data = array(
            'page_title' => 'Hot Deals Details | Special Hotel Rates | Findmyfare',
            'meta_keywords' => 'Sri Lanka hotels, Sri Lanka holiday deals, Cheap hotel deals, Holiday hot deals, 9yZnKaacnSOXpBNvJci0GPB-OlQ',
            'meta_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.',
            'og_url' => base_url("hotdeal-details"),
            'og_image' => '',
            'og_title' => 'Hot Deals Details | Special Hotel Rates | Findmyfare',
            'og_description' => 'Findmyfare offers  the best hotel rates and special rates for holiday accommodations in Sri Lanka. Check out our Hot deals to plan your next trip and Save money.'
        );
        $this->load->view('template/header', $data);
        $this->load->view('hotdeal-details-vw');
        $this->load->view('template/footer');
    }

    public function hotdeal_details_func() {

        $this->load->model("hotdeal_details_mod");

        //gets the hotel name from the url
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = end(split('/', $_SERVER['REQUEST_URI_PATH']));
        $hotel_name = str_replace("-", " ", $segments);
        $hotelName = str_replace("-", " ", $segments);

        $data1 = array(
            'hotel_name' => $hotel_name,
        );

        $hotelIDArr = $this->hotdeal_details_mod->hotdeal_hotelID($data1);

        $data2 = array(
            'hotel_id' => $hotelIDArr[0]['id'],
            'city_info' => $hotelIDArr[0]['city_info'],
        );

        //data for the slider

        $city = array(
            'city_info' => $hotelIDArr[0]['city_info'],
            'hotel_name' => $hotelName
        );

        $hotel_info = $this->hotdeal_details_mod->hotel_info_slider($city);
        
        $hot_hotel = $this->hotdeal_details_mod->hotdeal_hot_hotels($data1);

        $hot_hotel_arr = array(
            'id' => $hot_hotel[0]['id'],
            'address' => $hot_hotel[0]['address'],
            'description' => $hot_hotel[0]['description'],
        );

        /*
         * Shortened Description
         * By : Gayan
         */
        $org_descript = str_replace('"','',$hot_hotel[0]['description']);
        $seo_descrip = substr($org_descript, 0, 150);
        $seo_descrip.='...';

        $data3 = array(
            'hot_hotel_id' => $hot_hotel[0]['id'],
        );

        $hot_deal_inclusives = $this->hotdeal_details_mod->hot_hotel_id($data3);

        $hot_deal_info = $this->hotdeal_details_mod->hotdeal_info($data2);

        $hot_deal_counts = $this->hotdeal_details_mod->hotdeal_count();

        $hot_deal_TC = $this->hotdeal_details_mod->terms_conditions();

        $hot_deal_Facilities = $this->hotdeal_details_mod->hotel_facilities();

        $hotel_facilities_arr = array();
        foreach ($hot_deal_Facilities as $facility) {
            $hot_deal_facility = array(
                'id' => $facility['id'],
                'facility' => $facility['facility']
            );
            array_push($hotel_facilities_arr, $hot_deal_facility);
        }


//        var_dump($hotel_facilities_arr); die();
        //hotdeals terms and conditions 
        $hot_deal_TC_arr = array();
        foreach ($hot_deal_TC as $info_element) {
            $hot_deal_TC_arr_ele = array(
                'id' => $info_element['id'],
                'condition' => $info_element['condition'],
            );
            array_push($hot_deal_TC_arr, $hot_deal_TC_arr_ele);
        }

        //hotdeal counts 
        $hot_deal_counts_arr = array();
        foreach ($hot_deal_counts as $element) {
            $hot_deal_counts_arr_ele = array(
                'rooms' => $element['rooms'],
                'hotels' => $element['hotels'],
            );
            array_push($hot_deal_counts_arr, $hot_deal_counts_arr_ele);
        }

        $hot_deal_info_arr = array();
        foreach ($hot_deal_info as $info_element) {
            $hot_deal_info_arr_ele = array(
                'hotel_name' => $info_element['hotel_name'],
                'board_basis' => $info_element['board_basis'],
                'room_type' => $info_element['room_type'],
                'hotel_name' => $info_element['hotel_name'],
                'occupancy' => $info_element['occupancy'],
                'discount_pre' => $info_element['discount_pre'],
                'regular_price' => $info_element['regular_price'],
                'SplDiscount_allowed' => $info_element['SplDiscount_allowed'],
                'id' => $info_element['id'],
                'hotel_name' => $info_element['hotel_name'],
                'description' => $info_element['description'],
                'vaild_from' => $info_element['vaild_from'],
                'vaild_to' => $info_element['vaild_to'],
                'block_category' => $info_element['block_category'],
                'SplDicount_bank' => $info_element['SplDicount_bank'],
                'SplDiscount_Pre' => $info_element['SplDiscount_Pre'],
                'min_date' => $info_element['min_date'],
                'blocked_dates' => $info_element['blocked_dates'],
                'room_limit' => $info_element['room_limit'],
                'sub' => $info_element['Sub'],
            );
            array_push($hot_deal_info_arr, $hot_deal_info_arr_ele);
        }


        //hotdeal inclusives
        $hot_deal_inclusives_arr = array(
            'option_no' => $hot_deal_inclusives[0]['option_no'],
            'inclusives' => $hot_deal_inclusives[0]['inclusives'],
        );


        $fb_special = $hot_hotel[0]['fb_special'];
        $isSoldout = $hot_hotel[0]['is_soldout'];
        $hotel_id = $hot_hotel[0]['id'];
        $id = $hot_deal_inclusives[0]['id'];
        $vaild_from = $hot_deal_info[0]['vaild_from'];
        $vaild_to = $hot_deal_info[0]['vaild_to'];
        $freebies = $hot_hotel[0]['freebies'];
        $freebies_descriptor = $hot_hotel[0]['freebies_descriptor'];
        $website = $hot_hotel[0]['website'];
        $facebook = $hot_hotel[0]['facebook'];
        $reservation = $hot_hotel[0]['reservation'];
        $is_booked = $hot_hotel[0]['is_booked'];
        $homepage_image = $hot_hotel[0]['homepage_image'];
        $dirHomepage = "hmgt/assist/photo-gallery/$hotel_id/Front";
        $termsAndConditions = $hot_hotel[0]['terms_and_condition'];
        $condionArr = explode(',', $termsAndConditions);

        $facilities = $hot_hotel[0]['facilities'];
        $facilityArr = explode(',', $facilities);

        /*
         * Front image URL
         * By: Gayan
         */
        if (isset($_SERVER['HTTPS'])) {
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        } else {
            $protocol = 'http';
        }
        $server_path = $protocol . "://" . $_SERVER['HTTP_HOST'];


        $image_url = $server_path . $hot_hotel[0]['homepage_image'];
        $seo_hotel_name = ucfirst($hotel_name);


//        var_dump($facilityArr); die();

        if (!$hot_deal_info) {
            redirect('404');
            exit();
        }

        $data = array(
            'page_title' => "$seo_hotel_name | Special Hotel Rates | Findmyfare",
            'meta_keywords' => "$seo_hotel_name, Sri Lanka hotels, Sri Lanka holiday deals, Cheap hotel deals, Holiday hot deals, 9yZnKaacnSOXpBNvJci0GPB-OlQ",
            'meta_description' => "$seo_descrip",
            'og_url' => "$image_url",
            'og_image' => "$image_url",
            'og_title' => "$seo_hotel_name | Special Hotel Rates | Findmyfare",
            'og_description' => "$seo_descrip",
            'hot_hotel_arr' => $hot_hotel_arr,
            'hot_deal_counts_arr' => $hot_deal_counts_arr,
            'hot_deal_info_arr' => $hot_deal_info_arr,
            'hot_deal_TC_arr' => $hot_deal_TC_arr,
            'hot_deal_inclusives_arr' => $hot_deal_inclusives_arr,
            'condionArr' => $condionArr,
            'hotel_id' => $hotel_id,
            'hotel_name' => $hotel_name,
            'isSoldout' => $isSoldout,
            'fb_special' => $fb_special,
            'id' => $id,
            'vaild_from' => $vaild_from,
            'vaild_to' => $vaild_to,
            'freebies' => $freebies,
            'freebies_descriptor' => $freebies_descriptor,
            'website' => $website,
            'facebook' => $facebook,
            'reservation' => $reservation,
            'is_booked' => $is_booked,
            'homepage_image' => $homepage_image,
            'dirHomepage' => $dirHomepage,
            'hotel_facilities_arr' => $hotel_facilities_arr,
            'facilityArr' => $facilityArr
        );
        //put return arrays to another array for pass to view
        $array_set = array(
            'hot_deal_info_arr' => $hot_deal_info_arr,
            'hotel_info' => $hotel_info,
            'city' => $city,
            'hotelName' => $hotelName
        );

        $this->load->view('template/header', $data);
        $this->load->view('hotdeal-details-vw', $array_set);
        $this->load->view('template/footer');
        $this->session->set_flashdata('hotelInfo', $hotel_name);
    }

}
