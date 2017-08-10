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

    public function show(){
        $rs = $this->db->where('status','Outstanding')->order_by('id_order','desc')->get('data_order')->result();
        $result = array();
        foreach ($rs as $r) {
            array_push($result, $r);
        }
         
        echo json_encode($result);
    }

    public function update($id){
        $waktu_acc =  $waktu = date('Y-m-d H:i:s');
        $data = array(
            'status' => 'Approved',
            'waktu_acc' => $waktu_acc
            );
        $result = $this->db->where('id_order',$id)->update('data_order', $data);
        if($result){
            echo json_encode(array(
                    'id_order' => $id,
                ));
        }else{
            echo json_encode(array('errorMsg'=>'Some errors occured.'));
        }
       
    }

   
 

}
