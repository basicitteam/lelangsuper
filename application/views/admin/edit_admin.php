<div class="row"><!-- Start Main Content -->

<div class="span9 pull-left">
          <div>
              <h4 class="btn btn-warning" style="width:97%;box-shadow: 0px -2px 7px #ccc;">Manage Lelang Super</h4>
              <hr>
          </div>
          <div class="tabbable tabs-left  alert alert-warning" style="border-color:#faa732;box-shadow: 0px -2px 7px #ccc;">
              <ul class="nav nav-tabs">
                <br>
                <li><a href="#1A" data-toggle="tab">Manage Lelang</a></li>
                <li><a href="#1B" data-toggle="tab">Manage Rule</a></li>
                <li  class="active"><a href="#1C" data-toggle="tab">Manage User</a></li>
                <li><a href="#1D" data-toggle="tab">Manage User Level</a></li>
                <li><a href="#1E" data-toggle="tab">Manage Content</a></li>
                <li><a href="#1F" data-toggle="tab">Manage Voucher</a></li>
                <li><a href="#1G" data-toggle="tab">Approve Beli Point</a></li>
              </ul>
              <br>
              <br>
              <div class="tab-content">
                <br>
                  <div class="tab-pane" id="1A">
                    <ul >
                      <a href="<?php echo site_url("admin/update_barang");?>" class="btn btn-warning pull-left" style="width:90%"> Input Barang Lelang</a>
                    </ul>
                    <br></br>
                     <ul >
                      <a href="<?php echo site_url("admin/update_rule_lelang");?>" class="btn btn-warning" style="width:90%"> Update Rule Lelang</a>
                    </ul>
                  </div>
                  <div class="tab-pane" id="1B">
                    <ul >
                      <a href="<?php echo site_url("admin/faq");?>" class="btn btn-warning pull-left" style="width:90%"> FAQ</a>
                    </ul>
                  </div>
                  <div class="tab-pane  active" id="1C">
                    <h4>
                      <center><strong>
                      Masukan Data Secara Lengkap
                      </strong></center></h4>
                      <hr>
                    <article>
            
                    <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                    <fieldset>
                      
                       <div class="control-group">
                        <label class="control-label" for="name">Nama Lengkap</label>
                        <div class="controls">
                          <input placeholder="Masukan Nama Lengkap Anda" type="text" class="input-large" id="name" name="name">
                        </div>
                        </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="alamat">Alamat</label>
                        <div class="controls">
                          <textarea placeholder="Masukan alamat" type="text" class="input-large" id="alamat" name="alamat" style="width:97%"> </textarea>
                        </div>
                        </div>
                        <div class="control-group">
                        <label class="control-label" for="No Telepom">No Telepom</label>
                        <div class="controls">
                          <textarea placeholder="Masukan No Telepom" type="text" class="input-large" id="No_Telepom" name="No_Telepom" style="width:97%"> </textarea>
                        </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="jk">Jenis Kelamin</label>
                          <div class="controls">
                            <select id="jk" name="jk">  
                                  <option>-Pilih Jenis Kelamin-</option>
                                  <option>Laki - Laki</option>
                                  <option>Perempuan</option>
                                  <option>Other</option>
                                     
                            </select>
                          </div>
                          </div>
                          <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                          <input placeholder="Masukan Username" type="text" class="input-large" id="username" name="username" style="width:97%">
                        </div>
                        </div>
                         <div class="control-group">
                        <label class="control-label" for="password1">Password</label>
                        <div class="controls">
                          <input placeholder="Masukan Password" type="text" class="input-large" id="password" name="password" style="width:97%">
                        </div>
                        </div>
                         <div class="control-group">
                        <label class="control-label" for="password2">Confirmasi Password</label>
                        <div class="controls">
                          <input placeholder="Konfirmasi Password" type="text" class="input-large" id="password" name="password" style="width:97%">
                        </div>
                        </div>
                      
                      <div class="control-group">
                        
                        <div class="controls">

                        </div>
                        </div>
                        <div class="form-actions alert alert-warning">
                            <a href="#update" role="button" data-toggle="modal" class="btn btn-danger" >Update</a>
                            <a href="<?php echo site_url('admin/setting');?>" class="btn btn-danger">Back</a>
                        </div>

                        <!-- End update barang-->


<!-- Modal Update-->

<form class="form-horizontal" action="<?php echo site_url('admin/setting'); ?>"  enctype="multipart/form-data">
          <div id="update" class="modal hide fade" style="display: none;box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
            
            <div class="modal-body">
              <h3>Profile Berhasil di Update!</h3>
            </div>
            <div class="modal-footer"style="background-color:#fcf8e3;">
              <button href="<?php echo site_url('admin/setting'); ?>" class="btn btn-danger" data-dismiss="modal">Back</button>
          </div>
        </form> 

<!-- End Modal Update-->


                    </fieldset>
                    </form>
        </article>
                  </div>
                  <div class="tab-pane" id="1D">
                     
                        <table class="table table-striped">
                          <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID User</th>
                            <th>Level User</th>
                            <th colspan="2"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Roger Danuarta</td>
                                <td>30209186</td>
                                <td>Superter</td>
                                <td>
                                  <form method="POST" action="#">
                                    <input type="hidden" name="status" value="3">
                                      <a type="submit" class="btn btn-danger pull-right" href="<?php echo site_url("admin/detail_user"); ?>">Detail</a>
                                      
                                  </form>
                                </td>
                                <td>
                                  <a type="submit" class="btn btn-danger pull-right" href="<?php echo site_url("admin/proses_user_bermasalah"); ?>">Baned</a>
                                </td>
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>Mohamad Arif Prasetyo</td>
                              <td>30209166</td>
                              <td>Supertest</td>
                              <td>
                                <form method="POST" action="#">
                                    <input type="hidden" name="status" value="3">
                                      <a type="submit" class="btn btn-danger pull-right" href="<?php echo site_url("admin/detail_user"); ?>">Detail</a>
                                  </form>
                              </td>
                              <td>
                                  <a type="submit" class="btn btn-danger pull-right" href="<?php echo site_url("admin/proses_user_bermasalah"); ?>">Baned</a>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="pagination pagination-centered"  > 
                          <ul style="box-shadow: 0px -2px 7px #ccc;">
                            <li class="disabled"><a href="#">previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">next</a></li>
                         </ul>
                        </div>

                  </div>
                  <div class="tab-pane" id="1E">
                    <ul>
                      <a href="<?php echo site_url("admin/setting_chat");?>" class="btn btn-warning" style="width:90%"> Pengaturan SuperChatt</a>
                    </ul>
                     <ul >
                      <a href="<?php echo site_url("admin/setting_testimoni");?>" class="btn btn-warning" style="width:90%">Pengaturan Testimoni</a>
                    </ul>
                    <ul>
                      <a href="<?php echo site_url("admin/setting_pemenang");?>" class="btn btn-warning" style="width:90%"> Pengaturan Pemenang Lelang</a>
                    </ul>   
                  </div>
                  <div class="tab-pane" id="1F">
                    <ul >
                      <a href="<?php echo site_url("admin/input_voucher");?>" class="btn btn-warning pull-left" style="width:90%"> Input Voucher Terbaru</a>
                    </ul>
                    <br></br>
                     <ul >
                      <a href="<?php echo site_url("admin/cek_voucher");?>" class="btn btn-warning" style="width:90%">Cek Pembelian Voucher</a>
                    </ul>
                  </div>
                  <div class="tab-pane" id="1G">
                    <ul class="media-list" >
                      <table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
                      <li class="media">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>
                              <p>User</p>
                              <p>Nomor ID</p>
                              <p>Bank</p>
                              <p>Jenis Paket</p>
                              <p>Nominal</p>
                            </dt>
                            <td>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                            </dt>
                            <td>
                              <p>Mohamad Arif Prasetyo</p>
                              <p>30209166</p>
                              <p>Mandiri</p>
                              <p>Extra Extra Large (XXL)</p>
                              <p>Rp. 500.000,00</p>
                            </dt>
                            <td>
                              <a href="#" class="btn btn-danger">Accept</a>
                              <br></br>
                              <a href="#" class="btn btn-danger">update</a>
                            </td>   
                        </tr>
                        <tr>
                            <td>
                              <p>User</p>
                              <p>Nomor ID</p>
                              <p>Bank</p>
                              <p>Jenis Paket</p>
                              <p>Nominal</p>
                            </dt>
                            <td>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                            </dt>
                            <td>
                              <p>Roger Danuarta</p>
                              <p>30209186</p>
                              <p>Mandiri</p>
                              <p>Extra Extra Large (XXL)</p>
                              <p>Rp. 500.000,00</p>
                            </dt>
                            <td>
                              <a href="#" class="btn btn-danger">Accept</a>
                              <br></br>
                              <a href="#" class="btn btn-danger">update</a>
                            </td>   
                        </tr>
                        <tr>
                            <td>
                              <p>User</p>
                              <p>Nomor ID</p>
                              <p>Bank</p>
                              <p>Jenis Paket</p>
                              <p>Nominal</p>
                            </dt>
                            <td>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                              <p>:</p>
                            </dt>
                            <td>
                              <p>Aditya Surya</p>
                              <p>30209190</p>
                              <p>Mandiri</p>
                              <p>Extra Extra Large (XXL)</p>
                              <p>Rp. 500.000,00</p>
                            </dt>
                            <td>
                              <a href="#" class="btn btn-danger">Accept</a>
                              <br></br>
                              <a href="#" class="btn btn-danger">update</a>
                            </td>   
                        </tr>
                         <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                      </li>
                      </table>
                    </ul>
                    <div class="pagination pagination-centered"  > 
              <ul style="box-shadow: 0px -2px 7px #ccc;">
                <li class="disabled"><a href="#">previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">next</a></li>
             </ul>
            </div>
                  </div>
              </div>
            </div>
        </div>
