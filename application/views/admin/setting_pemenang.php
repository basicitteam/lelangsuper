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
                <li><a href="#1C" data-toggle="tab">Manage User</a></li>
                <li><a href="#1D" data-toggle="tab">Manage User Level</a></li>
                <li  class="active"><a href="#1E" data-toggle="tab">Manage Content</a></li>
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
                  <div class="tab-pane" id="1C">
                    <ul >
                      <a href="<?php echo site_url("admin/view_user");?>" class="btn btn-warning pull-left" style="width:90%"> Lihat Member Lelang</a>
                    </ul>
                    <br></br>
                     <ul >
                      <a href="<?php echo site_url("admin/manage_user_bermasalah");?>" class="btn btn-warning" style="width:90%">Manage User Bermasalah</a>
                    </ul>
                    <ul>
                      <a href="<?php echo site_url("admin/proses_user_bermasalah");?>" class="btn btn-warning" style="width:90%"> Proses User Bermasalah</a>
                    </ul>
                     <ul>
                      <a href="<?php echo site_url("admin/edit_admin");?>" class="btn btn-warning" style="width:90%"> Edit Profile Admin</a>
                    </ul>
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
                  <div class="tab-pane  active" id="1E">
                   
                    <h4 style="color:#ff9900;"><center><strong><em>Status Pemenang Lelang Super</em></strong></center></h4>
                      <hr>
                     <table class="table table-striped">
                    <thead>
                      <tr>
                      <th><center>User ID</center></th>
                      <th><center>Lelang ID</center></th>
                      <th><center>Harga</center></th>
                      <th><center>Gambar Lelang</center></th>
                      <th colspan="2"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="alert alert-warning">
                      <td><center>30209166</center></td>
                      <td><center>L121</center></td>
                      <td><center>Rp 500.000,00</center></td>
                      <td><center><img src="<?php echo base_url('assets/img/b.png');?>"></center></td>
                      <td>
                      <form method="POST" action="#">
                        <input type="hidden"  value="3">
                        <a type="submit" class="btn btn-danger pull-left" href="#app" role="button" data-toggle="modal"><i class="icon-edit"></i>Approve</a>
                      </form>
                      </td>
                      </tr>
                      </tbody>
                  </table>
                  <hr></hr>
                    <a href="<?php echo site_url("admin/setting");?>" class="btn btn-success pull-right" > Back</a>
                    <br></br> 
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
<!-- modal view -->


<form class="form-horizontal" action="<?php echo site_url('admin/setting'); ?>"  enctype="multipart/form-data">
            <div id="app" class="modal hide fade" style="display: none;box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
            <div class="modal-header">
              <p><center>Pemenang Lelang Galaxy Ace</center></p>
            </div>
            <div class="modal-body">
              <P>Apakah benar ID 30209166 Atas Nama Mohamad Arif Prasetyo sudah melakukan transfer uang sebesar Rp. 500.000,00  </P>
            </div>
            <div class="modal-footer"style="background-color:#fcf8e3;">
              <a href="<?php echo site_url('admin/setting');?>" class="btn btn-danger" >YA</a>
              <a href="<?php echo site_url('admin/setting_pemenang');?>" class="btn btn-danger" >BELUM</a>
          </div>
        </div>
        </form>
<!-- end modal view -->

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
