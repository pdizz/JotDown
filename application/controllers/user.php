<?php 

class User extends CI_Controller {
    /*
    public function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
    }*/
    
    public function login() {

        //validate form input
        $this->form_validation->set_rules('username', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            //check to see if the user is logging in
            //check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember)) {
                //if the login is successful
                //redirect them back to the home page
                //$this->session->set_flashdata('message', $this->ion_auth->messages());
            } 
            else {
                //if the login was un-successful
                //redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
            }
            
        }
        else {
            
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        
        }
        
        redirect('notes');
        
        
	
    }
    
    public function logout() {
        
        $this->ion_auth->logout();
        redirect('notes');
        
    }
    
    public function register() {
        
    }
    
}

?>
