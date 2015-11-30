<?php

/*
 *  FINDMYFARE.COM - Team Innovation 
 *  ---------------------------------
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class payment_hotdeals extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('basicMethod');
        $this->load->library('form_validation');
    }

    public function index() {


        $data = array(
            /*
             *  META TAGS
             */
            'page_title' => 'Payments | Hotel hot deals',
            'meta_keywords' => '',
            'meta_description' => '',
            'og_url' => '',
            'og_image' => '',
            'og_title' => 'Payments | Hotel hot deals',
            'og_description' => '',
        );

        $this->load->view('template/header', $data);
        $this->load->view('hotdeals-payment/hotdeals_payment');
        $this->load->view('template/footer');
    }

    public function hotdeal_payments() {

        $regularCost = $this->input->post('regularCost');
        $regularDiscount = $this->input->post('regularDiscount');
        $SplDiscount_Pre = $this->input->post('SplDiscount_Pre');
         

        $buynow = $this->input->post('buynow');
        $booknow = $this->input->post('booknow');

        if (isset($buynow) && !empty($buynow)) {
            $bookingType = 2;
        }
        if (isset($booknow) && !empty($booknow)) {
            $bookingType = 1;
        }

        $bankId = $this->input->post('SplDicount_bank');

        

        $minimumDateToShow = '0';
        $todayDate = new DateTime();
        $minDAteDb = new DateTime($hotdeals_details['vaild_from']);

        if ($minDAteDb->getTimestamp() < $todayDate->getTimestamp()) {
            $minimumDateToShow = $hotdeals_details['min_date'];
        } else {
            $minimumDateToShow = $hotdeals_details['vaild_from'];
        }

        $SplDiscount_allowed = $this->input->post('SplDiscount_allowed');
        $regularDiscount = $this->input->post('regularDiscount');
        $SplDicount_bank = $this->input->post('SplDicount_bank');
        $rateWithFullDiscount = $regularCost * ((100 - $totalDiscount) / 100);
        
        $contractArr = array(["regularDiscount" => "$regularDiscount"], ["SplDicount_bank" => "$SplDicount_bank"], ["SplDiscount_allowed" => "$SplDiscount_allowed"], ["bankId", "$bankId"], ["rateWithFullDiscount", "$rateWithFullDiscount"]);
        $json64StringContract = base64_encode(json_encode($contractArr));

        if ($SplDiscount_Pre == 0 && $SplDiscount_allowed != 0) {
            $SplDiscount_Pre = "5";
        }
        
        if ($regularDiscount == 0) {
            $regularDiscount = 5;
        }   
        
        $totalDiscount = $regularDiscount + $SplDiscount_Pre;
        $SplDiscount_Amount = $regularCost * $totalDiscount;
        
        $hotdeals_details = array(
            'roomID' => $this->input->post('roomID'),
            'hotelID' => $this->input->post('hotelID'),
            'hotel_name' => $this->input->post('hotel'),
            'cost' => $this->input->post('cost'),
            'room' => $this->input->post('room'),
            'package' => $this->input->post('package'),
            'hoteladdress' => $this->input->post('hoteladdress'),
            'regularCost' => $this->input->post('regularCost'),
            'regularDiscount' => $this->input->post('regularDiscount'),
            'SplDiscount_allowed' => $this->input->post('SplDiscount_allowed'),
            'SplDiscount_Pre' => $this->input->post('SplDiscount_Pre'),
            'SplDicount_bank' => $this->input->post('SplDicount_bank'),
            'hotelDescription' => $this->input->post('hotelDescription'),
            'valid_from' => $this->input->post('valid_from'),
            'valid_to' => $this->input->post('valid_to'),
            'occupancy' => $this->input->post('occupancy'),
            'blockcat' => $this->input->post('blockcat'),
            'buynow' => $this->input->post('buynow'),
            'booknow' => $this->input->post('booknow'),
            'min_date' => $this->input->post('min_date'),
            'blocked_dates' => $this->input->post('blocked_dates'),
            'room_limit' => $this->input->post('room_limit'),
            'totalDiscount' => $totalDiscount,
        );
        
        $data = array(
            /*
             *  META TAGS
             */
            'page_title' => 'Payments | Hotel hot deals',
            'meta_keywords' => '',
            'meta_description' => '',
            'og_url' => '',
            'og_image' => '',
            'og_title' => 'Payments | Hotel hot deals',
            'og_description' => '',
            'hotdeals_details' => $hotdeals_details,
            'bookingType' => $bookingType,
            'bankId' => $bankId,
            'SplDiscount_Amount' => $SplDiscount_Amount,
            'minimumDateToShow' => $minimumDateToShow,
            'json64StringContract' => $json64StringContract,
            'rateWithFullDiscount' => $rateWithFullDiscount,
            'SplDiscount_Pre' => $SplDiscount_Pre
        );
        var_dump($data); die($bankId);
        
        $this->load->view('template/header', $data);
        $this->load->view('hotdeals-payment/hotdeals_payment_vw', $data);
        $this->load->view('template/footer');
    }

}
