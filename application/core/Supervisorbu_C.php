<?php
class Supervisorbu_C extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $username = $this->session->userdata('name');
        $level    = $this->session->userdata('level');
        $is_login = $this->session->userdata('is_login');

        if (!$is_login) {
            redirect(base_url().'login');
            return;
        }

        if ($level !== 'supervisorbu') {
            redirect(base_url().'login');
            return;
        }
    }
}