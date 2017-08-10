<div class="easyui-tabs" style="width:100%;height:500px">
        <div title="Input Data Order" style="padding:10px">
            <div style="margin:20px 0;"></div>
    
    <table id="dg" title="Data Order" class="easyui-datagrid" style="width:98%;height:75%"
        url="<?= base_url() ?>Operatorbu/show"
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
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New Order</a>
   
</div>
<div id="dlg" class="easyui-dialog" style="width:500px;height:500px;padding:10px 20px"
        closed="true" buttons="#dlg-buttons">
    
    <form id="fm" method="post" novalidate>
     <table style="width:100%">
  <tr>
    <td width="25%"><label>Nama Debitur</label></td>
    <td>:</td>
    <td><input name="nama_debitur" class="easyui-textbox" required="true"></td>
  </tr>
  <tr>
    <td><label>Email Debitur</label></td>
    <td>:</td>
    <td><input name="email_debitur" validType="email" class="easyui-textbox" required="true"></td>
  </tr>
  <tr>
    <td><label>Limit Kredit</label></td>
    <td>:</td>
    <td><input name="limit_kredit" class="easyui-textbox" required="true"</td>
  </tr>
  <tr>
    <td><label>Segmen Kredit</label></td>
    <td>:</td>
    <td><input name="segmen_kredit" required="true" class="easyui-textbox" ></td>
  </tr>
  <tr>
    <td><label>Jenis Order</label></td>
    <td>:</td>
    <td><select id="cc" class="easyui-combobox" name="jenis_order" required="true">
                <option value="Notaris">Notaris</option>
                <option value="Asuransi">Asuransi</option>
                <option value="KJPP">KJPP</option>
        </select>
    </td>
  </tr>
  <tr>
    <td><label>Detail Agunan</label></td>
    <td>:</td>
    <td><textarea name="detail_agunan" required="true" class="easyui-textarea" ></textarea></td>
  </tr>
  <tr>
    <td><label>Nama PIC Deb</label></td>
    <td>:</td>
    <td><input name="nama_pic_debitur" required="true" class="easyui-textbox" ></td>
  </tr>
  <tr>
    <td><label>No Telp PIC Deb</label></td>
    <td>:</td>
    <td><input name="telpon_pic_debitur" required="true" class="easyui-textbox" ></td>
  </tr>     

</table> 

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
    function newUser(){
    $('#dlg').dialog('open').dialog('setTitle','New Order');
    $('#fm').form('clear');
    url = '<?= base_url() ?>Operatorbu/save';
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
    