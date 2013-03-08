<?php 

class Notes extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('notes_model');
    }
    
    public function index() {
    
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notepad');
        $this->load->view('footer');
        
    }
    
    public function view() {
        
    }
    
    public function save() {
        
        // save current input for refresh
        $this->session->set_flashdata('title', $this->input->post('title'));
        $this->session->set_flashdata('notes', $this->input->post('notes'));
        
        $this->notes_model->set_notes();
        redirect('notes');
        
    }
    
    public function export() {
        
    }
    
}

?>
