<?php 

class Notes extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('notes_model');
    }
    
    
    public function index() {
        
        // blank data so notepad view doesn't cause error
        $data['note'] = array(
            'id' => '-1',
            'title' => '',
            'text' => ''
            );
    
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notepad', $data);
        $this->load->view('footer');
        
    }
       
    public function view($note_id = NULL) {
        
        // if user isnt logged in refresh with error message
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('message', 'Please log in to view your notes.');
            redirect('notes');
        }
        
        $user_id = $this->ion_auth->user()->row()->id;
        
        if ($note_id === NULL) {       
            $data['notes'] = $this->notes_model->get_notes_by_user($user_id);
        }
        else { 
            // set first index of data['notes'] model only returning one row
            $data['notes'][0] = $this->notes_model->get_note_by_id($note_id);
        }
        
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notebook', $data);
        $this->load->view('footer');
        
    }
    
    /* TODO: change save() to update current entry if editing existing notes.
     * 
     * change references to text from $notes to $text
     */
    
    public function edit($note_id) {
        
        $user_id = $this->ion_auth->user()->row()->id;
        
        // TODO: error handling
        $data['note'] = $this->notes_model->get_note_by_id($note_id);
        
        $this->load->view('header');
        $this->load->view('dash');
        $this->load->view('notepad', $data);
        $this->load->view('footer');        
        
    }

    public function save() {
        
        $note_id = $this->input->post('note_id');
        $title = $this->input->post('title');
        $notes = $this->input->post('text');
        
        // save current input for after refresh
        $this->session->set_flashdata('title', $title);
        $this->session->set_flashdata('text', $notes);
        
        // set notes in model and get the new or updated ID
        // TODO: error handling
        $note_id = $this->notes_model->set_notes($note_id, $title, $notes, $this->ion_auth->user()->row()->id);
        
        
        
        redirect('notes/edit/'.$note_id);
        
    }
    
    public function export() {
        
        // TODO: export notes to download as HTML, PDF, ePub (using markdown to epub library)
        
        
    }
    
}

?>
