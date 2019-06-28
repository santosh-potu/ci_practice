<?php
class Session_Controller extends CI_Controller{
    public function index(){
        $this->load->library('session');
        
        $this->session->set_userdata('name','virat');
         $this->load->view('session_view');
    }
    
     public function unset_session_data() { 
         //loading session library
         $this->load->library('session');
			
         //removing session data 
         $this->session->unset_userdata('name'); 
         $this->load->view('session_view'); 
      } 
}
