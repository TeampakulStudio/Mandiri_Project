<div class="easyui-tabs">
    <div title="Data Rekanan" style="padding-left:10px; padding-right:20px; ">
	<div class="row">
            <div class="col-xs-12">
            <?php $this->load->view('_partial/flash_message') ?>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Rekanan Asuransi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Limit Kredit</th>
                        <th>Jenis Order</th>
                        <th width="18%">Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                      foreach ($asuransi as $value) {
                        
                        $i++;
                    ?>


                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $value->nama; ?></td>
                        <td><?= $value->email; ?></td>
                        <td><?= $value->limit_kredit; ?></td>
                        <td><?= $value->jenis_order; ?></td>
                        <td><a href="#"<button class="btn btn-info">Detail</button> </a> <a href="<?= base_url(); ?>Administrator/editasuransi/<?= $value->id; ?>"<button class="btn btn-success">Edit</button> </a> <a onclick="return confirm('Yakin hapus <?= $value->nama; ?> ?')" href="<?= base_url(); ?>Administrator/deleteasuransi/<?= $value->id; ?>"<button class="btn btn-danger">Hapus</button> </a></td>
                        
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