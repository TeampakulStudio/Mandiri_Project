<?php
$name = $this->session->userdata('name');
$level = $this->session->userdata('level');
echo $name.'<br>'.$level;
?>