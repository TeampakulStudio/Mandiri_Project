
 

<div title="Data Order" data-options="closable:true" style="padding:10px">
    <table id="tt" class="easyui-datagrid" style="width:100%;height:auto;">
        <thead>
            <tr>
                <th field="No" width="50">No</th>
                <th field="name2" width="100" >Nama Debitur</th>
                <th field="name3"  width="100" >Limit Kredit</th>
                <th field="name4" width="100"  >Segmen Kredit</th>
                <th field="name5"  width="100" >Jenis Order</th>
                <th field="name7" width="100"  >Nama PIC Deb</th>
                <th field="name8" width="120"  >Telpon PIC Deb</th>
                <th field="name9"  width="100" >Status</th>
                <th field="name10" width="100"  >Action</th>
             
            </tr>                          
        </thead>                           
        <tbody>                            
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
                        <td><a href="<?= base_url(); ?>Operatorbu/detail/<?= $value->id_order; ?>"<button class="btn btn-info">Detail</button> </a></td>
                        
                      </tr>

                    <?php
                      }
                    ?>
                    </tbody>
                    </tfoot>
                      
        </tbody>                           
    </table>
	

</div>