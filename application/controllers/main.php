<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    
 public function __construct() {
        parent::__construct();
        $this->load->model('testModel');
     
    }

	public function index()
	{
            echo 'hello';
		//$this->load->view('welcome_message');
	}
        
        public function dataGet(){
            
//            echo 'method data get';
//           $this->load->model('testModel');
           $var=$this->testModel->getDetailsData();
//           var_dump($var);
//           foreach ($var as $row){
//               
//               echo $row->id;
//               echo '<br>';
//           }
           $data = array(
               
               'id'=> $var[1]['id'],
               'name'=>$var[1]['name']
           );
           
           $this->load->view('dataView', $data);
        }
        
        public function dataTest(){
            
//            $this->load->model('testModel');
            $result =$this->testModel->insertData();
           // var_dump($result);
        }
}
