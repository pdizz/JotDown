<?php 

class Notes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function get_notes($user_id) {
        
        // TODO: handle $subject
        
        $query = $this->db->get_where('notes', array('user_id' => $user_id));
        //var_dump($query->result_array());
        return $query->result_array();
        
    }
    
    public function set_notes($title, $text, $user_id) {
        
        $data = array(
            'title' => $title,
            'text' => $text,
            'user_id' => $user_id
            // subject => $subject // TODO!
            
        );
        
        return $this->db->insert('notes', $data);
        
    }
    
    
}





?>
