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
        
        // if user isnt logged in refresh with error message
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('message', 'Please log in to view your notes.');
            redirect('notes');
        }
        
        $data['notes'] = $this->notes_model->get_notes($this->ion_auth->user()->row()->id);
        
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notebook', $data);
        $this->load->view('footer');
        
    }
    
    /* TODO: change save() to update current entry if editing existing notes.
     * implement edit()
     */
    
    public function edit() {}

    public function save() {
        
        $title = $this->input->post('title');
        $notes = $this->input->post('text');
        
        // save current input for after refresh
        $this->session->set_flashdata('title', $title);
        $this->session->set_flashdata('text', $notes);
        
        // set notes in model and redirect
        // TODO: check for errors
        $this->notes_model->set_notes($title, $notes, $this->ion_auth->user()->row()->id);
        redirect('notes');
        
    }
    
    public function export() {
        
    }
    
}

?>
