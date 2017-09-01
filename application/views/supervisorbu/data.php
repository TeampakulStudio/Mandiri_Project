<div class="easyui-tabs">
    <div title="Data Order" style="padding-left:10px; padding-right:20px; ">
     <?php $this->load->view('_partial/flash_message') ?>
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Order</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Debitur</th>
                        <th>Limit Kredit</th>
                        <th>Segmen Kredit</th>
                        <th>Jenis Order</th>
                        <th>Nama PIC Deb</th>
                        <th>Telpon PIC Deb</th>
                        <th>Status</th>
                        <th>Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                      foreach ($order as $value) {
                        
                        $i++;
                    ?>


                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $value->nama_debitur; ?></td>
                        <td><?= $value->limit_kredit; ?></td>
                        <td><?= $value->segmen_kredit; ?></td>
                        <td><?= $value->jenis_order; ?></td>
                        <td><?= $value->nama_pic_debitur; ?></td>
                        <td><?= $value->telpon_pic_debitur; ?></td>
                         <td><?= $value->status; ?></td>
                        <td><a href="<?= base_url(); ?>Supervisorbu/detail/<?= $value->id_order; ?>"<button class="btn btn-info">Detail</button> </a></td>
                        
                      </tr>

                    <?php
                      }
                    ?>
                    </tbody>
                    </tfoot>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

    </div>
</div>