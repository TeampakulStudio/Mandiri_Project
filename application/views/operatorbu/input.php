<div class="easyui-tabs" style="width:100%;height:500px">
		<div title="Input Data Order" style="padding:10px">
			<div style="margin:20px 0;"></div>
	<table class="easyui-datagrid" style="width:100%;height:100%"
			data-options="rownumbers:true,singleSelect:true,url:'<?= base_url() ?>assets/demo/datagrid/datagrid_data1.json',method:'get',toolbar:toolbar">
		<thead>
			<tr>
				<th data-options="field:'itemid',width:100">Nama Debitur</th>
				<th data-options="field:'productid',width:100">Limit Kredit</th>
				<th data-options="field:'listprice',width:110,align:'right'">Segmen Kredit</th>
				<th data-options="field:'unitcost',width:80,align:'right'">Jenis Order</th>
				<th data-options="field:'attr1',width:80">Attribute</th>
				<th data-options="field:'status',width:60,align:'center'">Status</th>
			</tr>
		</thead>
	</table>
	<script type="text/javascript">
		var toolbar = [{
			text:'Tambah',
			iconCls:'icon-add',
			handler:    function newUser(){
        $('#dlg').dialog('open').dialog('setTitle','New User');
        $('#fm').form('clear');
        url = 'save_user.php';
    }
		}];
	</script>
    <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
            closed="true" buttons="#dlg-buttons">
        <div class="ftitle">User Information</div>
        <form id="fm" method="post" novalidate>
            <div class="fitem">
                <label>First Name:</label>
                <input name="firstname" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Last Name:</label>
                <input name="lastname" class="easyui-textbox" required="true">
            </div>
            <div class="fitem">
                <label>Phone:</label>
                <input name="phone" class="easyui-textbox">
            </div>
            <div class="fitem">
                <label>Email:</label>
                <input name="email" class="easyui-textbox" validType="email">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>

		</div>

	</div>
	