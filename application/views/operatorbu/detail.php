
    <div title="Detail Order" style="padding-left:10px; padding-right:20px; ">
		<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
         
                            
                  <div class="box-body">
                   
                          <table style="font-weight:normal;">
        <thead>
            <tr>
                <th data-options="field:'code'">  <div style="margin:1px 0;"></div>
  <div class="easyui-panel" title="Data Order" style="width:500px;max-width:500px;padding:10px 10px;height:500px">
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
                    </div
      
    
    </th>
                <th data-options="field:'name'">  <div style="margin:1px 0;"></div>
  <div class="easyui-panel" title="Agunan" style="width:500px;max-width:500px;padding:10px 10px;height:500px;">


             <?php
              $i=0;
              foreach ($agunan as $value) {
              $i++;
             ?>

         
        
                  <h3 class="box-title">Agunan <?= $i; ?></h3>
            
              
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
            


                 
       

               <?php
              }
             ?>


                    
                 
                   

               

    

    </th>
             
            </tr>
        </thead>
     
    </table>

                  </div><!-- /.box-body -->
                   <div class="box-footer">
                    <button type="button" onclick="javascript:history.back()" class="btn btn-primary">Back</button>
                   
                  </div><!-- /.box-footer -->

                 
              </div><!-- /.box -->
             </div><!--col-md-6-->
            



             </div><!-- /.row -->
    </div>
</div>