
<?php
class Cache_controller extends CI_Controller { 
	
      public function index() {
          $this->output->cache(10);
          $this->load->view('cache');
          
      }
      
      public function delete_file_cache() { 
          $this->output->delete_cache('cachecontroller');
      }
      
      
}
