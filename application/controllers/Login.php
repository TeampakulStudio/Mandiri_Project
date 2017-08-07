<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
	public function index()
    {
        $login = $this->session->userdata('is_login'); 
        if($login === true)
             redirect(base_url());
        if (!$_POST) {
            $input = (object) $this->login->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->login->validate()) {
            $this->load->view('login', compact('input'));
            return;
        }

        if ($this->login->login($input)) {
            $level = $this->session->userdata('level');
            if($level == 'operatorbu'){
                redirect(base_url().'operatorbu');
            }else{
                redirect(base_url());    
            }
            
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah!');
        }

        redirect('login');
	}

	public function logout()
	{
        $this->login->logout();
        redirect(base_url().'login');
	}
}
