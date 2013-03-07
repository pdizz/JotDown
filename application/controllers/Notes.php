<?php 

class Notes extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('notes_model');
    }
    
    public function create() {
    
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notepad');
        $this->load->view('footer');
        
    }
    
    public function view() {
        
    }
    
    public function save() {
        
        $this->notes_model->set_notes();
        redirect('notes/create');
        
    }
    
    public function export() {
        
    }
    
}

?>
