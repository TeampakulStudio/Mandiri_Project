

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

	<div data-options="region:'west',split:true,title:'Menu'" style="width:200px;padding:10px;">

<ul id="tt1" class="easyui-tree" data-options="animate:true,dnd:true">
  
    <li data-options="iconCls:'icon-master'">
        <span>Bisnis Order</span>
        <ul>
            <li data-options="iconCls:'icon-barang'"><a href="">Input Data Order</a></li>
     
        </ul>
    </li>

    <li data-options="iconCls:'icon-out'">
        <span><a href="">Keluar</a></span>
    </li>
    
</ul>


	</div>

	<div data-options="region:'south',border:false" style="height:50px;background:#A9FACD;padding:10px;">south region</div>
	<div data-options="region:'center',title:'Center'">
	
	

	</div>


	<script type="text/javascript" src="<?= base_url() ?>assets/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/jquery.easyui.min.js"></script>
</body>
</html>