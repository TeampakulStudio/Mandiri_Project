<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

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
		$data['kategori'] = $this->home->kategoriDokumen();
		foreach ($data['kategori'] as $key => $value) {
			$keren[] = $value;
		}

		
		
		foreach ($keren as $value) {
			$dokumen[] =  $this->home->listDokumen($value['id']);
		}

		$data['kategori'] = $keren;
		$data['listdokumen'] = $dokumen;

		$data['kategori2'] = $this->home->kategoriVideo();
		foreach ($data['kategori2'] as $key => $value) {
			$keren2[] = $value;
		}

		
		
		foreach ($keren2 as $value) {
			$dokumen2[] =  $this->home->listVideo($value['id']);
		}

		$data['kategori2'] = $keren2;
		$data['listvideo'] = $dokumen2;

		$data['slider']='inc/slider';
		$data['main']='index';
		$this->load->view('template',$data);
	}

	public function listvideo($id)
	{
		$data['judul'] = $this->home->getJudul($id);
		$data['materi'] = $this->home->getMateri($id);
		$data['sidebar'] = 'inc/sidebar';
		$data['main']='listvideo';
		$this->load->view('template',$data);
	}

	public function listdokumen($id)
	{
		$data['judul'] = $this->home->getJudul($id);
		$data['materi'] = $this->home->getMateri($id);

		$data['sidebar'] = 'inc/sidebar';
		$data['main']='listdokumen';
		$this->load->view('template',$data);
	}

	public function video($id)
	{
		$data['materi'] = $this->home->getVideo($id);
		$data['sidebar'] = 'inc/sidebar';
		$data['main']='video';
		$this->load->view('template',$data);
	}

}
