<?php

class Lang_controller extends CI_Controller {
    
    public function index(){
        //Load form helper
         $this->load->helper('form');
         
         $language = $this->input->post('language');
         
         //Choose language file according to selected lanaguage
         if($language == "french"){
             $this->lang->load('french_lang','french');
         }elseif($language == "germany"){
             $this->lang->load("germany_lang",'germany');
         }else{
             $this->lang->load("english",'english');
         }
        
         //Fetch the message from language file.
         $data['msg']=$this->lang->line('msg');
         $data['language'] = $language;
        $this->load->view('lang_view',$data);
    }
}
