

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/demo/demo.css">
	
</head>
<body class="easyui-layout">
	<div data-options="region:'north',border:false" style="height:100px;background:#013066;padding:10px">north region</div>
	<div data-options="region:'west',split:true,title:'Menu'" style="width:150px;padding:10px;">



	</div>

	<div data-options="region:'south',border:false" style="height:50px;background:#A9FACD;padding:10px;">south region</div>
	<div data-options="region:'center',title:'Center'">
		<?php
$name = $this->session->userdata('name');
$level = $this->session->userdata('level');
echo $name.'<br>'.$level;

?>

	</div>


	<script type="text/javascript" src="<?= base_url() ?>assets/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/jquery.easyui.min.js"></script>
</body>
</html>