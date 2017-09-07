<div class="easyui-tabs">
    <div title="Data Order" style="padding-left:10px; padding-right:20px; ">
		<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Order</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                            
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Nama Debitur</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->nama_debitur; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Limit Kredit</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->limit_kredit; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Segmen Kredit</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->segmen_kredit; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Jenis Order</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->jenis_order; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Nama PIC Deb</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->nama_pic_debitur; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Telpon PIC Deb</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->telpon_pic_debitur; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Waktu Input</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $order->waktu; ?></label>
                    </div>
                    
                  </div><!-- /.box-body -->
                   <div class="box-footer">
                    <button type="button" onclick="javascript:history.back()" class="btn btn-primary">Back</button>
                   
                  </div><!-- /.box-footer -->

                 
              </div><!-- /.box -->
             </div><!--col-md-6-->
             <div class="col-md-6">

             <?php
             	$i=0;
             	foreach ($agunan as $value) {
             	$i++;
             ?>

             <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Agunan <?= $i; ?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                   <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">No</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $value->no; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $value->alamat; ?></label>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Nama Pemilik</label>
                      <label class="col-sm-1">:</label>
                      <label for="inputEmail3" class="col-sm-8 control-label"><?= $value->nama_pemilik; ?></label>
                    </div>
                   
                  </div><!-- /.box-body -->


                 
              </div><!-- /.box -->

               <?php
             	}
             ?>


                    
                 
                   

               

              </div><!-- /.col-md-6 -->



             </div><!-- /.row -->
    </div>
</div>