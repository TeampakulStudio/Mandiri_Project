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

    public function show(){
        $id_user = $id_user = $this->session->userdata('id'); 
        $rs = $this->db->where('id_user',$id_user)->order_by('id_order','desc')->get('data_order')->result();
        $result = array();
        foreach ($rs as $r) {
            array_push($result, $r);
        }
         
        echo json_encode($result);
    }

    public function save(){
        $id_user = $this->session->userdata('id');
        $nama_debitur = $this->input->post('nama_debitur');
        $email_debitur = $this->input->post('email_debitur');
        $limit_kredit = $this->input->post('limit_kredit');
        $segmen_kredit = $this->input->post('segmen_kredit');
        $detail_agunan = $this->input->post('detail_agunan');
        $nama_pic_debitur = $this->input->post('nama_pic_debitur');
        $jenis_order = $this->input->post('jenis_order');
        $telpon_pic_debitur = $this->input->post('telpon_pic_debitur');
        $waktu = date('Y-m-d H:i:s');
        $data = array(
            'id_user' => $id_user,
            'nama_debitur' => $nama_debitur,
            'email_debitur' => $email_debitur,
            'limit_kredit' => $limit_kredit,
            'segmen_kredit' => $segmen_kredit,
            'detail_agunan' => $detail_agunan,
            'nama_pic_debitur' => $nama_pic_debitur,
            'telpon_pic_debitur' => $telpon_pic_debitur,
            'segmen_kredit' => $segmen_kredit,
            'jenis_order' => $jenis_order,
            'waktu' => $waktu
            );
        $this->db->insert('data_order', $data);
        $result = $this->db->insert_id();
        if ($result){
                echo json_encode(array(
                    'id_order' => $result,
                    'nama_debitur' => $nama_debitur,
                    'email_debitur' => $email_debitur,
                    'limit_kredit' => $limit_kredit,
                    'segmen_kredit' => $segmen_kredit,
                    'jenis_order' => $jenis_order,
                    'detail_agunan' => $detail_agunan,
                    'nama_pic_debitur' => $nama_pic_debitur,
                    'telpon_pic_debitur' => $telpon_pic_debitur
                ));
        }else{
                echo json_encode(array('errorMsg'=>'Some errors occured.'));
        }
    }

}
