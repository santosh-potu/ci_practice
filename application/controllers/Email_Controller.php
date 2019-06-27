<?php
 class Email_Controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->helper('form'); 
         $this->load->view('email_form'); 
      } 
  
      public function send_mail() { 
          $from_email = "santosh@example.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
         
         
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'santoshreddy.potu@gmail.com';
        $config['smtp_pass'] = '';
        $config['smtp_port'] = 465;
        $config['smtp_crypto'] = 'ssl';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
   
         $this->email->from($from_email, 'Santosh'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
         
         
         //Send mail 
         if($this->email->send()){ 
            $this->session->set_flashdata("email_sent","Email sent successfully."); 
         }else{ 
            $this->session->set_flashdata("email_sent","Error in sending Email."); 
         }
         $this->load->view('email_form');
          
      }
 }