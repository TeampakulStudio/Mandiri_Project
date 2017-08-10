<div class="easyui-tabs" style="width:100%;height:500px">
		<div title="Input Data Order" style="padding:10px">
			<div style="margin:20px 0;"></div>
	<table id="dg" title="Data Order" class="easyui-datagrid" style="width:98%;height:75%"
        url="<?= base_url() ?>Supervisorbu/show"
        toolbar="#toolbar"
        rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="nama_debitur" width="50">Nama Debitur</th>
            <th field="email_debitur" width="50">Email Debitur</th>
            <th field="limit_kredit" width="50">Limit Kredit</th>
            <th field="segmen_kredit" width="50">Segmen Kredit</th>
            <th field="jenis_order" width="50">Jenis Order</th>
            <th field="detail_agunan" width="50">Agunan</th>
            <th field="nama_pic_debitur" width="50">Nama PIC Deb</th>
            <th field="telpon_pic_debitur" width="50">No Telp PIC Deb</th>
            <th field="status" width="50">Status</th>

        </tr>
    </thead>
</table>
<div id="toolbar">
  <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Approv</a>
   
</div>
<div id="dlg" class="easyui-dialog" style="width:300px;height:140px;padding:10px 20px"
        closed="true" buttons="#dlg-buttons">
    <div class="ftitle"></div>
    <form id="fm" method="post" novalidate>
        <div class="fitem">
            <label>Sure to approve This Order ?</label>
        </div>


    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
</div>
   

		</div>

	</div>
	</div>

<script type="text/javascript">
	

function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('setTitle','Approve Order');
                $('#fm').form('load',row);
                url = '<?= base_url() ?>Supervisorbu/update/'+row.id_order;
            }
}




function saveUser(){
    $('#fm').form('submit',{
        url: url,
        onSubmit: function(){
            return $(this).form('validate');
        },
        success: function(result){
            var result = eval('('+result+')');
            if (result.errorMsg){
                $.messager.show({
                    title: 'Error',
                    msg: result.errorMsg
                });
            } else {
                $('#dlg').dialog('close');        // close the dialog
                $('#dg').datagrid('reload');    // reload the user data
            }
        }
    });
}

</script>


		</div>

	</div>
	