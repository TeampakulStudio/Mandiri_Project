// JavaScript Document
$(document).ready(function(){
	$(function(){
		$('button').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
	});
	$(".data").flexigrid({
		  url : 'modul/pengguna/post-json.php',
		  dataType : 'json',
		  colModel : [{display : 'No',name : 'no',width : 20,sortable : false,align : 'center'},
					  {display : 'UserName',name : 'username',width : 60,sortable : true,align : 'center'}, 
					  {display : 'Nama Lengkap',name : 'nama_lengkap',width : 180,sortable : true,align : 'left'}, 
					  {display : 'Level',name : 'level',width : 50,sortable : true,align : 'center'}, 
					  {display : 'blokir',name : 'blokir',width : 50,sortable : true,align : 'center',hide : false}
		  ],
		  buttons : [{name : 'Add',bclass : 'add',onpress : test}, 
					 {name : 'Edit',bclass : 'edit',onpress : test}, 
					 {name : 'Delete',bclass : 'delete',onpress : test}, 
					 {separator : true} ,
					 {name : 'Refresh',bclass : 'refresh',onpress : test}
		  ],
		  searchitems : [ 
			  {display : 'User Name',name : 'username',isdefault : true}, 
			  {display : 'Nama Lengkap',name : 'nama_lengkap'	} 
		  ],
		  sortname : "username",
		  sortorder : "asc",
		  singleSelect : true,
		  usepager : true,
		  title : 'Daftar Users',
		  useRp : true,
		  rp : 10,
		  showTableToggleBtn : false,
		  height : 260,
		  pagetext: 'Hal ',
		  outof: 's.d'
	  });
	  function test(com, grid) {
		  if (com == 'Delete') {
			  //confirm('Delete ' + $('.trSelected', grid).length + ' items?')
			  if ($('.trSelected',grid).length == 1) { 
				$('.trSelected',grid).each(function() {
				 var id = $(this).attr('id');
				 id = id.substring(id.lastIndexOf('row')+3);  // ambil data kolom id       
				 	var pilih = confirm('Data yang akan dihapus  = '+id+ '?');
					if (pilih==true) {
						HapusData(id);
					}
				});    
			   } else {
				alert('Silahkan pilih salah satu baris yang ingin di Hapus');
				return false;
			   }
		  } else if (com == 'Add') {
			  //alert('Add New Item');
			  Tambah();
		  }else if (com == 'Edit') {
			  //alert('Add New Item');
			  if ($('.trSelected',grid).length == 1) { 
				$('.trSelected',grid).each(function() {
				 var id = $(this).attr('id');
				 id = id.substring(id.lastIndexOf('row')+3);  // ambil data kolom id       
				 	EditData(id);
				});    
			   } else {
				alert('Silahkan pilih salah satu baris yang ingin di edit');
				return false;
			   }
		  }else if (com == 'Refresh') {
			  window.location.replace('media.php?module=pengguna');
		  }
	  }
		  
	$('#form_input').dialog({
		buttons:[{
			text:'Simpan',
			iconCls:'icon-save',
			handler:function(){
				//alert('ok');
				simpan();
				$('.data').flexReload();
			}
		},{
			text:'Tambah',
			iconCls:'icon-add',
			handler:function(){
				//$(".easyui-validatebox").val('');
				//$(".input").val('');	
				//$("#users").focus();
				var nama =  $("#namalengkap").val();
			  var ex = nama.split(' ');
			  var nama_awal = ex[0];
			  alert (nama_awal);
			}
		},{
			text:'Kembali',
			iconCls:'icon-back',
			handler:function(){
				$('#form_input').dialog('close');
				//tampilData();
				$('.data').flexReload();
			}
		}]
	});
	
	function Tambah(){
		$(".easyui-validatebox").val('');
		$(".input").val('');		
		$("#users").attr("disabled",false);
		$("#users").focus();
		$('#form_input').dialog('open');
		return false;
	}
	
	function EditData(e){
		var id	= e;
		$.ajax({
			type	: "POST",
			url		: "modul/pengguna/cari.php",
			data	: "id="+id,
			dataType : "json",				  
			success	: function(data){
				$("#users").val(id);
				$("#namalengkap").val(data.namalengkap);
				$("#level").val(data.level);
				$("#blokir").val(data.blokir);
				
				$("#users").attr("disabled",true);
				$('#form_input').dialog('open');
				$('.data').flexReload();
				return false;
			}
		});
	}
	
	function HapusData(e){
		var id	= e;
		$.ajax({
			type	: "POST",
			url		: "modul/pengguna/hapus.php",
			data	: "id="+id,			  
			success	: function(data){
				$.messager.show({
					title:'Info',
					msg:data, //'Password Tidak Boleh Kosong.',
					timeout:2000,
					showType:'slide'
				});
				$('.data').flexReload();
			}
		});
	}
		
	function simpan(){
		var username	= $("#users").val();
		var nama		= $("#namalengkap").val();
		var pwd1		= $("#pwd1").val();
		var pwd2		= $("#pwd2").val();
		var level		= $("#level").val();
		var blokir		= $("#blokir").val();

		if(username.length==0){
			alert('Maaf, Username tidak boleh kosong');
			$("#username").focus();
			return false();
		}
		if(nama.length==0){
			alert('Maaf, Nama Lengkap tidak boleh kosong');
			$("#namalengkap").focus();
			return false();
		}
		if(level.length==0){
			alert('Maaf, Anda belum memilih Level');
			$("#level").focus();
			return false();
		}
		if(pwd1 != pwd2){
			alert('Maaf, Password  tidak sama');
			$("#pwd2").focus();
			return false();
		}
		$.ajax({
			type	: "POST",
			url		: "modul/pengguna/simpan.php",
			data	: "username="+username+
					"&nama="+nama+
					"&pwd1="+pwd1+
					"&level="+level+
					"&blokir="+blokir,
			success	: function(data){
				$.messager.show({
					title:'Info',
					msg:data, //'Password Tidak Boleh Kosong.',
					timeout:2000,
					showType:'slide'
				});
				$('.data').flexReload();
			}
		});
	}
	
});