<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Operatorbu extends Operatorbu_C
{
	public function index()
    {
        $this->load->view('operatorbu/inc/north');
    	$this->load->view('operatorbu/inc/west');
        $this->load->view('operatorbu/index');
        $this->load->view('operatorbu/inc/south');

        $this->load->library('email');

$subject = 'This is a test';
$message = '<p>This message has been sent for testing purposes.</p>';

// Get full html:
$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
' . $message . '
</body>
</html>';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);

$result = $this->email
        ->from('yourusername@gmail.com')
        ->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
        ->to('therecipient@otherdomain.com')
        ->subject($subject)
        ->message($body)
        ->send();

var_dump($result);
echo '<br />';
echo $this->email->print_debugger();

exit;
    }

    public function input()
    { 
        if(isset($_POST['submit'])){
            $id_user = $this->session->userdata('id');
            $nama_debitur = $this->input->post('nama_debitur');
            $limit_kredit = $this->input->post('limit_kredit');
            $segmen_kredit = $this->input->post('segmen_kredit');
            $jenis_order = $this->input->post('jenis_order');
            $nama_pic_debitur = $this->input->post('nama_pic_debitur');
            $telpon_pic_debitur = $this->input->post('telpon_pic_debitur');
        
            //agunan
            $order = array(
                'id_user' => $id_user,
                'nama_debitur' => $nama_debitur,
                'limit_kredit' => $limit_kredit,
                'segmen_kredit' => $segmen_kredit,
                'jenis_order' => $jenis_order,
                'nama_pic_debitur' => $nama_pic_debitur,
                'telpon_pic_debitur' => $telpon_pic_debitur
                );
            $insert = $this->db->insert('data_order', $order);
            $id_order = $this->db->insert_id();
            if($insert){
                $no           = $_POST['no'];
                $alamat       = $_POST['alamat'];
                $nama_pemilik = $_POST['nama_pemilik'];
                $jum_array    = count($no);
                for($i=0;$i<$jum_array;$i++){
                    $agunan = array(
                        'no' => $no[$i],
                        'alamat' => $alamat[$i],
                        'nama_pemilik' => $nama_pemilik[$i],
                        'id_order' => $id_order
                        );
                    $this->db->insert('agunan', $agunan);
                }
                $this->session->set_flashdata('success', '<strong>Berhasil! </strong> Data Order Telah disimpan.');
                $this->load->view('operatorbu/inc/north');
                $this->load->view('operatorbu/inc/west');
                $this->load->view('operatorbu/input');
                $this->load->view('operatorbu/inc/south');   
            }else{
                $this->session->set_flashdata('error', '<strong>Error! </strong> Something Wrong, call Administrator.');
                $this->load->view('operatorbu/inc/north');
                $this->load->view('operatorbu/inc/west');
                $this->load->view('operatorbu/input');
                $this->load->view('operatorbu/inc/south'); 
            }
        }else{
            $this->load->view('operatorbu/inc/north');
            $this->load->view('operatorbu/inc/west');
            $this->load->view('operatorbu/input');
            $this->load->view('operatorbu/inc/south');    
        }
    }

    public function data(){
        $data['order'] = $this->db->where('id_user', $this->session->userdata('id'))->get('data_order')->result();
        $this->load->view('operatorbu/inc/north');
        $this->load->view('operatorbu/inc/west');
        $this->load->view('operatorbu/data',$data);
        $this->load->view('operatorbu/inc/south');
    }

    public function detail($id){
        $data['order'] = $this->db->where('id_order',$id)->get('data_order')->row();
        $data['agunan'] = $this->db->where('id_order',$id)->get('agunan')->result();
        $this->load->view('operatorbu/inc/north');
        $this->load->view('operatorbu/inc/west');
        $this->load->view('operatorbu/detail',$data);
        $this->load->view('operatorbu/inc/south');  
    }

}
