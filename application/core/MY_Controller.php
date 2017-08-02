<?php
class MY_Controller extends CI_Controller
{
    protected $halaman = '';

    public function __construct()
    {
        parent::__construct();

        $model = strtolower(get_class($this));
        if (file_exists(APPPATH . 'models/' . $model . '_model.php')) {
            $this->load->model($model . '_model', $model, true);
        }
    }
}
