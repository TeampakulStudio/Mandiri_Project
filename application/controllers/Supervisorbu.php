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

    public function data($ket=null)
    {
        if($ket == 'success'){
             $this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Order Telah disimpan.');
        }elseif($ket == 'error'){
             $this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
        }
        $data['order'] = $this->db->where('status','Waiting')->order_by('id_order','desc')->get('data_order')->result();
    	$this->load->view('supervisorbu/inc/north');
    	$this->load->view('supervisorbu/inc/west');
        $this->load->view('supervisorbu/data',$data);
        $this->load->view('supervisorbu/inc/south');
    }
    
    public function detail($id){
        $data['order'] = $this->db->where('id_order',$id)->get('data_order')->row();
        $user = $data['order']->id_user;
        $data['user'] = $this->db->where('id',$user)->get('user')->row();
        $data['agunan'] = $this->db->where('id_order',$id)->get('agunan')->result();
         $this->load->view('supervisorbu/inc/north');
        $this->load->view('supervisorbu/inc/west');
        $this->load->view('supervisorbu/detaildata',$data);
        $this->load->view('supervisorbu/inc/south');
    }

    public function detailapp($id){
        $data['order'] = $this->db->where('id_order',$id)->get('data_order')->row();
        $user = $data['order']->id_user;
        $data['user'] = $this->db->where('id',$user)->get('user')->row();
        $data['agunan'] = $this->db->where('id_order',$id)->get('agunan')->result();
         $this->load->view('supervisorbu/inc/north');
        $this->load->view('supervisorbu/inc/west');
        $this->load->view('supervisorbu/detailapp',$data);
        $this->load->view('supervisorbu/inc/south');
    }

    public function dataapprov()
    {
          $data['order'] = $this->db->where('status','Approved')->order_by('id_order','desc')->get('data_order')->result();
        $this->load->view('supervisorbu/inc/north');
        $this->load->view('supervisorbu/inc/west');
        $this->load->view('supervisorbu/dataapprov',$data);
        $this->load->view('supervisorbu/inc/south');
    }

    public function update($id){
        $waktu_acc = date('Y-m-d H:i:s');
        $data = array(
            'status' => 'Approved',
            'waktu_acc' => $waktu_acc
            );
        $result = $this->db->where('id_order',$id)->update('data_order', $data);
        if($result){
            redirect(base_url().'Supervisorbu/data/success');
        }else{
            redirect(base_url().'Supervisorbu/data/error');
        }
       
    }
   
 

}
