<?php 

class Notes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function get_notes_by_user($user_id) {
        
        // TODO: handle $subject
        
        $query = $this->db->get_where('notes', array('user_id' => $user_id));
        return $query->result_array();
        
    }
    
    private function note_exists($note_id) {
        
        $query = $this->db->get_where('notes', array('id' => $note_id));
        return $query->num_rows() > 0;
        
    }
    
    public function get_note_by_id($note_id) {
        
        // TODO: handle request for note which doesn't exists
        // if note_exists($note_id) {}
        $query = $this->db->get_where('notes', array('id' => $note_id));
        return $query->row_array();
        
    }   
    
    public function set_notes($note_id, $title, $text, $user_id) {
        
        $data = array(
            'title' => $title,
            'text' => $text,
            'user_id' => $user_id
            // subject => $subject // TODO!
            
        );
        
        // if note already exists just update it
        if ($this->note_exists($note_id)) {
            $this->db->where('id', $note_id);
            return $this->db->update('notes', $data);
        }
        else {
            return $this->db->insert('notes', $data);
        }
        
    }
    
    
}





?>
