<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login_model extends MY_Model
{
    public $table = 'user';

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'username'    => '',
            'password' => '',
        ];
    }

    public function login($input)
    {
        $input->password = md5($input->password);

        $user = $this->db->where('username', $input->username)
                          ->where('password', $input->password)
                          ->limit(1)
                          ->get($this->table)
                          ->row();

        if (count($user)) {
            $data = [
            	'id' => $user->id,
                'name' => $user->name,
                'level'    => $user->level,
                'is_login' => true
            ];

            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }

    public function logout()
    {
        $data = [
        	'id'		=> null,
            'name' => null,
            'level'    => null,
            'is_login' => null
        ];
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
    }
}
