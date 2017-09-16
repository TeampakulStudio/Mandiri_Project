<div title="Input" data-options="closable:true" style="padding:10px">

 <form action="<?= base_url() ?>Operatorbu/input" method="post">
        <div style="margin:20px 0;"></div>
         <?php $this->load->view('_partial/flash_message') ?>
     
                <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Order</h3>
                </div>
                            
                 
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
                

  <div style="margin:1px 0;"></div>
  <div class="easyui-panel" title="Data Order" style="width:100%;max-width:500px;padding:1px 1px;">
    <form id="ff" class="easyui-form" method="post" data-options="novalidate:true">
      <div style="margin-bottom:10px">
        <input class="easyui-textbox" name="name" style="width:100%" data-options="label:'Nama Debitur:',required:true">
      </div>
      <div style="margin-bottom:20px">
        <input class="easyui-textbox" name="email" style="width:100%" data-options="label:'Limit Kredit:',required:true,validType:'email'">
      </div>
      <div style="margin-bottom:20px">
        <input class="easyui-textbox" name="subject" style="width:100%" data-options="label:'Segmen Kredit:',required:true">
      </div>
      <div style="margin-bottom:20px">

        <input class="easyui-textbox" name="message" style="width:100%;height:60px" data-options="label:'Jenis Order:',labelWidth:100,multiline:true">
      </div>
      <div style="margin-bottom:20px">
        <select class="easyui-combobox" name="language" label="Language" style="width:100%"><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh-cht">Chinese Traditional</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="en" selected="selected">English</option><option value="et">Estonian</option><option value="fi">Finnish</option><option value="fr">French</option><option value="de">German</option><option value="el">Greek</option><option value="ht">Haitian Creole</option><option value="he">Hebrew</option><option value="hi">Hindi</option><option value="mww">Hmong Daw</option><option value="hu">Hungarian</option><option value="id">Indonesian</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="ko">Korean</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sv">Swedish</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="vi">Vietnamese</option></select>
      </div>
    </form>
    <div style="text-align:center;padding:5px 0">
      <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Submit</a>
      <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">Clear</a>
    </div>
  </div>
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
    </div>
    