<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supervisorbu extends Supervisorbu_C
{
	public function index()
    {
        $this->load->view('supervisorbu/inc/north');
    	$this->load->view('supervisorbu/inc/west');
        $this->load->view('supervisorbu/index');
        $this->load->view('supervisorbu/inc/south');
    }

    public function input()
    {
    	$this->load->view('supervisorbu/inc/north');
    	$this->load->view('supervisorbu/inc/west');
        $this->load->view('supervisorbu/input');
        $this->load->view('supervisorbu/inc/south');
    }

}
