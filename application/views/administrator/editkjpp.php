<div class="easyui-tabs">
    <div title="Input Data Reakanan" style="padding-left:10px; padding-right:20px; ">

 <form action="<?= base_url() ?>Administrator/editkjpp/<?= $value->id; ?>" method="post">
        <div style="margin:20px 0;"></div>
         <?php $this->load->view('_partial/flash_message') ?>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
             
                <!-- form start -->
                
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Rekanan KJPP</h3>
                </div>

                <div class="col-md-4"></div>
                  <div class="col-md-4">
                  <div class="box box-info">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Rekanan</label>
                      <input value="<?= $value->nama; ?>" type="text" required="1" name="nama" class="form-control" placeholder="Enter Nama Rekanan">
                    </div>
                   
                    <div class="form-group">
                      <label>Email</label>
                      <input value="<?= $value->email; ?>" required="1" type="email" name="email" class="form-control" placeholder="Enter Email Rekanan">
                    </div>
                    <div class="form-group">
                      <label>Limit Kredit</label>
                      <input value="<?= $value->limit_kredit; ?>" type="text" name="limit_kredit" required="1" class="form-control" placeholder="Enter Limit Kredit">
                    </div>
                    <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-success control-group pull-right">Submit</button>
                  </div><!-- /.box-footer -->
                   
                    </div>
                    <div class="col-md-4"></div>
                    
                  </div><!-- /.box-body -->

                 </div>
           
                </div><!-- /.col-md-12 -->
             </div><!-- /.row -->
        </form>

    </div>
</div>
    