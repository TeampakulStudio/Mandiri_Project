
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mandiri Order - Unit Bisnis OP</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/demo/demo.css">
    <script type="text/javascript" src="<?= base_url() ?>assets/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/jquery.easyui.min.js"></script>
    
</head>
<body class="easyui-layout">
<div data-options="region:'north',border:false" style="height:100px;background:#013066;padding:10px"><img src="<?= base_url() ?>assets/images/logo.png" alt="" align="right"  height="80" width="200"></div>
    <div data-options="region:'west',split:true,title:'Menu'" style="width:200px;padding:10px;"

<ul id="tt1" class="easyui-tree" data-options="animate:true,dnd:true">
  
   <li data-options="iconCls:'icon-home'">
        <span><a href="<?= base_url(); ?>Operatorbu/index">Home</a></span>
    </li>
    <li data-options="iconCls:'icon-transaksi'">
        <span>Input Data Order</span>
        <ul>

         
            <li data-options="iconCls:'icon-lap'"><a href="<?= base_url(); ?>Operatorbu/data">Data Order</a></li>
            <li data-options="iconCls:'icon-beli'"><a href="<?= base_url(); ?>Operatorbu/input">Asuransi</a></li>
            <li data-options="iconCls:'icon-beli'"><a href="<?= base_url(); ?>Operatorbu/input">KJPP</a></li>
            <li data-options="iconCls:'icon-beli'"><a href="<?= base_url(); ?>Operatorbu/input">Notaris</a></li>


  <script type="text/javascript">

    
  </script>
             

        </ul>
    </li>



    <li data-options="iconCls:'icon-out'">
        <span><a href="<?= base_url(); ?>logout">Keluar</a></span>
    </li>
    
</ul>
</div>
    <div data-options="region:'south',border:false" style="height:50px;background:#013066;padding:10px;"></div>
    <div data-options="region:'center',title:'Center'">
        <div id="tt" class="easyui-tabs" data-options="tools:'#tab-tools'" style="width:100%;height:100%">

