<?php 

class Notes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function get_notes() {
        
        
        
    }
    
    public function set_notes() {
        
        $data = array(
            'title' => $this->input->post('title'),
            'text' => $this->input->post('notes'),
            'user_id' => $this->ion_auth->user()->row()->id
            
        );
        
        return $this->db->insert('notes', $data);
        
    }
    
    
}





?>
