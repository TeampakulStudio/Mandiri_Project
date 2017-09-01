<div class="easyui-tabs">
    <div title="Input Data Order" style="padding-left:10px; padding-right:20px; ">

 <form action="<?= base_url() ?>Operatorbu/input" method="post">
        <div style="margin:20px 0;"></div>
         <?php $this->load->view('_partial/flash_message') ?>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
             
                <!-- form start -->
                <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Order</h3>
                </div>
                            
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Debitur</label>
                      <input type="text" required="1" name="nama_debitur" class="form-control" placeholder="Enter Nama Debitur">
                    </div>
                   
                    <div class="form-group">
                      <label>Limit Kredit</label>
                      <input type="text" name="limit_kredit" class="form-control" placeholder="Enter Limit Kredit">
                    </div>
                    <div class="form-group">
                      <label>Segmen Kredit</label>
                      <input type="text" name="segmen_kredit" class="form-control" placeholder="Enter Segmen Kredit">
                    </div>
                    <div class="form-group">
                      <label>Jenis Order</label>
                      <select name="jenis_order" class="form-control">
                        <option value="Asuransi">Asuransi</option>
                        <option value="Notaris">Notaris</option>
                        <option value="KJPP">KJPP</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama PIC Debitur</label>
                      <input type="text" name="nama_pic_debitur" class="form-control" placeholder="Enter Nama PIC Debitur">
                    </div>
                    <div class="form-group">
                      <label>Telp PIC Debitur</label>
                      <input type="text" name="telpon_pic_debitur" class="form-control" placeholder="Enter Telpon PIC Debitur">
                    </div>
                    
                  </div><!-- /.box-body -->

                 </div>
             </div><!--col-md-6-->
             <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Agunan</h3>
                </div><!-- /.box-header -->
             <!-- Horizontal Form -->
             
                <!-- form start -->
              
                  <div class="box-body  after-add-more">
                    <div class="control-group form-group">
                      <label for="inputEmail3" class="control-label">No</label>
                     
                        <input type="text" required="true" name="no[]" class="form-control" placeholder="No. SHM/SHGB/SHGU/SHMSRS">
                     
                    </div>
                    <div class="control-group form-group">
                      <label for="inputPassword3" class=" control-label">Alamat</label>
                        <input required="1" type="text" name="alamat[]" class="form-control" id="inputPassword3" placeholder="alamat">
                    </div>
                    <div class="control-group form-group">
                      <label for="inputPassword3" class=" control-label">Nama Pemilik</label>
                        <input required="1" type="text" name="nama_pemilik[]" class="form-control" id="inputPassword3" placeholder="alamat">
                    </div>
                    
                    
                    <div class="box-footer">
                    <button type="button" class="btn btn-info pull-left add-more">Add More</button>
                    <button type="submit" name="submit" class="btn btn-success control-group pull-right">Submit</button>
                  </div><!-- /.box-footer -->

                  </div><!-- /.box-body -->
                
                </div>
              </div><!-- /.col-md-6 -->



             </div><!-- /.row -->
        </form>
        <div class="copy hide">
          <div class="box-body control-group">
                    <div class="control-group form-group">
                      <label for="inputEmail3" class="control-label">No</label>
                     
                        <input type="text" required="true" name="no[]" class="form-control" placeholder="No. SHM/SHGB/SHGU/SHMSRS">
                     
                    </div>
                    <div class="control-group form-group">
                      <label for="inputPassword3" class=" control-label">Alamat</label>
                        <input type="text" required="1" name="alamat[]" class="form-control" id="inputPassword3" placeholder="alamat">
                    </div>
                    <div class="control-group form-group">
                      <label for="inputPassword3" class=" control-label">Nama pemilik</label>
                        <input required="1" type="text" name="nama_pemilik[]" class="form-control" id="inputPassword3" placeholder="alamat">
                    </div>
                    
                    <div class="control-group box-footer">
                    <button type="button" class="btn btn-danger pull-right remove">Remove</button>
                  </div><!-- /.box-footer -->
            </div><!-- /.box-body -->
        </div><!-- /.copy hide -->

    </div>
</div>
    