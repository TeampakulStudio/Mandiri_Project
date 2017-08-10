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
  <a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="editUser()">Approve</a>
   
</div>
<div id="dlg" class="easyui-dialog" style="width:600px;height:480px;padding:10px 20px"
        closed="true" buttons="#dlg-buttons">
    <div class="ftitle">Order Information</div>
    <form id="fm" method="post" novalidate>
        <div class="fitem">
            <label>Nama Debitur:</label>
            <input id="tb" name="nama_debitur" class="easyui-textbox" required="true">
        </div>
        <div class="fitem">
            <label>Email Debitur:</label>
            <input id="tb2" name="email_debitur" validType="email" class="easyui-textbox" required="true">
        </div>
        <div class="fitem">
            <label>Limit Kredit:</label>
            <input id="tb3" name="limit_kredit" class="easyui-textbox" required="true">
        </div>
        <div class="fitem">
            <label>Segmen Kredit:</label>
            <input id="tb4" name="segmen_kredit" required="true" class="easyui-textbox" >
        </div>
        <div class="fitem">
        <label>Jenis Order:</label>
            <select id="tb5" class="easyui-combobox" name="jenis_order" required="true">
                <option value="Notaris">Notaris</option>
                <option value="Asuransi">Asuransi</option>
                <option value="KJPP">KJPP</option>
            </select>
        </div>
        <div class="fitem">
            <label>Detail Agunan:</label>
            <textarea style="height:200px; width:100%" id="tb6" readonly="true" name="detail_agunan" required="true" class="easyui-textarea" ></textarea>
        </div>
        <div class="fitem">
            <label>Nama PIC Deb:</label>
            <input id="tb7" name="nama_pic_debitur" required="true" class="easyui-textbox" >
        </div>
        <div class="fitem">
            <label>No Telp PIC Deb:</label>
            <input id="tb8" name="telpon_pic_debitur" required="true" class="easyui-textbox" >
        </div>
        <div class="fitem">
            <label>Status:</label>
            <input id="tb9" name="status" required="true" class="easyui-textbox" >
        </div>


    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Approve</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
</div>
   

		</div>

	</div>
	</div>

<script type="text/javascript">
	

function editUser(){
    $('#tb').textbox('readonly');
    $('#tb2').textbox('readonly');
    $('#tb3').textbox('readonly');
    $('#tb4').textbox('readonly');
    $('#tb5').combo('readonly');
    $('#tb7').textbox('readonly');
    $('#tb8').textbox('readonly');
    $('#tb9').textbox('readonly');
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
	