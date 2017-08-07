<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Operatorbu extends Operatorbu_C
{
	public function index()
    {
        $this->load->view('operatorbu/inc/north');
    	$this->load->view('operatorbu/inc/west');
        $this->load->view('operatorbu/index');
        $this->load->view('operatorbu/inc/south');
    }

    public function input()
    {
    	$this->load->view('operatorbu/inc/north');
    	$this->load->view('operatorbu/inc/west');
        $this->load->view('operatorbu/input');
        $this->load->view('operatorbu/inc/south');
    }

}
