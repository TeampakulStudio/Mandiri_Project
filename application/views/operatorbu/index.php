<?php 
$name = $this->session->userdata('name');
$level = $this->session->userdata('level');
echo 'Selamat datang<br>';
echo $name.'<br>'.$level;
?>