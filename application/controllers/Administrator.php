<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends Administrator_C {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('administrator/inc/north');
    	$this->load->view('administrator/inc/west');
        $this->load->view('administrator/index');
        $this->load->view('administrator/inc/south');
	}

	public function input(){
		if(isset($_POST['submit'])){
            $nama = $this->input->post('nama');
            $limit_kredit = $this->input->post('limit_kredit');
            $email = $this->input->post('email');
            $jenis_order = $this->input->post('jenis_order');
            
            $rekanan = array(
                'nama' => $nama,
                'limit_kredit' => $limit_kredit,
                'email' => $email,
                'jenis_order' => $jenis_order,
                );
            $insert = $this->db->insert('rekanan', $rekanan);
           if($insert){
                $this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Order Telah disimpan.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/input');
                $this->load->view('administrator/inc/south');   
            }else{
                $this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/input');
                $this->load->view('administrator/inc/south'); 
            }
        }else{
            $this->load->view('administrator/inc/north');
            $this->load->view('administrator/inc/west');
            $this->load->view('administrator/input');
            $this->load->view('administrator/inc/south');    
        }
	}

	public function listasuransi(){
		$data['asuransi'] = $this->db->where('jenis_order', 'Asuransi')->get('rekanan')->result();
        $this->load->view('administrator/inc/north');
        $this->load->view('administrator/inc/west');
        $this->load->view('administrator/listasuransi',$data);
        $this->load->view('administrator/inc/south');
	}

	public function deleteasuransi($id){
		 $delete = $this->db->where('id', $id)->delete('rekanan');
		 if($delete){
		 	$this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Order Telah dihapus.');
		 	$data['asuransi'] = $this->db->where('jenis_order', 'Asuransi')->get('rekanan')->result();
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listasuransi',$data);
                $this->load->view('administrator/inc/south');
		 }else{
		 	$data['asuransi'] = $this->db->where('jenis_order', 'Asuransi')->get('rekanan')->result();
		 	$this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listasuransi',$data);
                $this->load->view('administrator/inc/south');
		 }
	}

	public function editasuransi($id){
		if(isset($_POST['submit'])){
            $nama = $this->input->post('nama');
            $limit_kredit = $this->input->post('limit_kredit');
            $email = $this->input->post('email');
          
            
            $rekanan = array(
                'nama' => $nama,
                'limit_kredit' => $limit_kredit,
                'email' => $email,
               
                );
            $update = $this->db->where('id',$id)->update('rekanan', $rekanan);
           if($update){
           		$data['asuransi'] = $this->db->where('jenis_order', 'Asuransi')->get('rekanan')->result();
                $this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Rekanan Telah diupdate.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listasuransi',$data);
                $this->load->view('administrator/inc/south');   
            }else{
                $this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/editasuransi');
                $this->load->view('administrator/inc/south'); 
            }
        }else{
        	$data['value'] = $this->db->where('id',$id)->get('rekanan')->row();
            $this->load->view('administrator/inc/north');
            $this->load->view('administrator/inc/west');
            $this->load->view('administrator/editasuransi',$data);
            $this->load->view('administrator/inc/south');    
        }
	}

	public function listkjpp(){
		$data['kjpp'] = $this->db->where('jenis_order', 'KJPP')->get('rekanan')->result();
        $this->load->view('administrator/inc/north');
        $this->load->view('administrator/inc/west');
        $this->load->view('administrator/listkjpp',$data);
        $this->load->view('administrator/inc/south');
	}

	public function deletekjpp($id){
		 $delete = $this->db->where('id', $id)->delete('rekanan');
		 if($delete){
		 	$this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Order Telah dihapus.');
		 	$data['kjpp'] = $this->db->where('jenis_order', 'KJPP')->get('rekanan')->result();
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listkjpp',$data);
                $this->load->view('administrator/inc/south');
		 }else{
		 	$data['kjpp'] = $this->db->where('jenis_order', 'KJPP')->get('rekanan')->result();
		 	$this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listkjpp',$data);
                $this->load->view('administrator/inc/south');
		 }
	}

	public function editkjpp($id){
		if(isset($_POST['submit'])){
            $nama = $this->input->post('nama');
            $limit_kredit = $this->input->post('limit_kredit');
            $email = $this->input->post('email');
          
            
            $rekanan = array(
                'nama' => $nama,
                'limit_kredit' => $limit_kredit,
                'email' => $email,
               
                );
            $update = $this->db->where('id',$id)->update('rekanan', $rekanan);
           if($update){
           		$data['kjpp'] = $this->db->where('jenis_order', 'KJPP')->get('rekanan')->result();
                $this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Rekanan Telah diupdate.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listkjpp',$data);
                $this->load->view('administrator/inc/south');   
            }else{
                $this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/editkjpp');
                $this->load->view('administrator/inc/south'); 
            }
        }else{
        	$data['value'] = $this->db->where('id',$id)->get('rekanan')->row();
            $this->load->view('administrator/inc/north');
            $this->load->view('administrator/inc/west');
            $this->load->view('administrator/editkjpp',$data);
            $this->load->view('administrator/inc/south');    
        }
	}

	public function listnotaris(){
		$data['notaris'] = $this->db->where('jenis_order', 'Notaris')->get('rekanan')->result();
        $this->load->view('administrator/inc/north');
        $this->load->view('administrator/inc/west');
        $this->load->view('administrator/listnotaris',$data);
        $this->load->view('administrator/inc/south');
	}

	public function deletenotaris($id){
		 $delete = $this->db->where('id', $id)->delete('rekanan');
		 if($delete){
		 	$this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Order Telah dihapus.');
		 	$data['notaris'] = $this->db->where('jenis_order', 'Notaris')->get('rekanan')->result();
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listnotaris',$data);
                $this->load->view('administrator/inc/south');
		 }else{
		 	$data['notaris'] = $this->db->where('jenis_order', 'Notaris')->get('rekanan')->result();
		 	$this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listnotaris',$data);
                $this->load->view('administrator/inc/south');
		 }
	}

	public function editnotaris($id){
		if(isset($_POST['submit'])){
            $nama = $this->input->post('nama');
            $limit_kredit = $this->input->post('limit_kredit');
            $email = $this->input->post('email');
          
            
            $rekanan = array(
                'nama' => $nama,
                'limit_kredit' => $limit_kredit,
                'email' => $email,
               
                );
            $update = $this->db->where('id',$id)->update('rekanan', $rekanan);
           if($update){
           		$data['notaris'] = $this->db->where('jenis_order', 'Notaris')->get('rekanan')->result();
                $this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Rekanan Telah diupdate.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/listnotaris',$data);
                $this->load->view('administrator/inc/south');   
            }else{
                $this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('administrator/inc/north');
                $this->load->view('administrator/inc/west');
                $this->load->view('administrator/editnotaris');
                $this->load->view('administrator/inc/south'); 
            }
        }else{
        	$data['value'] = $this->db->where('id',$id)->get('rekanan')->row();
            $this->load->view('administrator/inc/north');
            $this->load->view('administrator/inc/west');
            $this->load->view('administrator/editnotaris',$data);
            $this->load->view('administrator/inc/south');    
        }
	}

}