<div class="easyui-tabs" style="width:100%;height:500px">
		<div title="Input Data Order" style="padding:10px">
			<div style="margin:20px 0;"></div>
	<table class="easyui-datagrid" title="DataGrid with Toolbar" style="width:700px;height:250px"
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
			text:'Add',
			iconCls:'icon-add',
			handler:function(){alert('add')}
		},{
			text:'Cut',
			iconCls:'icon-cut',
			handler:function(){alert('cut')}
		},'-',{
			text:'Save',
			iconCls:'icon-save',
			handler:function(){alert('save')}
		}];
	</script>


		</div>

	</div>
	