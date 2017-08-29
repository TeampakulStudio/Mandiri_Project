
	<div data-options="region:'west',split:true,title:'Menu'" style="width:200px;padding:10px;">

<ul id="tt1" class="easyui-tree" data-options="animate:true,dnd:true">
  
   <li data-options="iconCls:'icon-home'">
        <span><a href="<?= base_url(); ?>Operatorbu">Home</a></span>
    </li>
    <li data-options="iconCls:'icon-master'">
        <span>Input Data Order</span>
        <ul>
            <li data-options="iconCls:'icon-barang'"><a href="<?= base_url(); ?>Operatorbu/input">Asuransi</a></li>
            <li data-options="iconCls:'icon-barang'"><a href="<?= base_url(); ?>Operatorbu/input">KJPP</a></li>
            <li data-options="iconCls:'icon-barang'"><a href="<?= base_url(); ?>Operatorbu/input">Notaris</a></li>
     
        </ul>
    </li>

    <li data-options="iconCls:'icon-out'">
        <span><a href="<?= base_url(); ?>logout">Keluar</a></span>
    </li>
    
</ul>


	</div>
	
<div data-options="region:'south',border:false" style="height:50px;background:#A9FACD;padding:10px;">south region</div>
    <div data-options="region:'center',title:'Center'">
