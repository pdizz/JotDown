<?php 

class Dev extends CI_Controller {
    
    public function sandbox() {
        
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notepad');
        $this->load->view('footer');
        
        
    }
    
}





?>
