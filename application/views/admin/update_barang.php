

<div class="row"><!-- Start Main Content -->

<div class="span9 pull-left">
          <div>
              <h4 class="btn btn-warning" style="width:97%;box-shadow: 0px -2px 7px #ccc;">Manage Lelang Super</h4>
              <hr>
          </div>
          <div class="tabbable tabs-left  alert alert-warning" style="border-color:#faa732;box-shadow: 0px -2px 7px #ccc;">
              <ul class="nav nav-tabs">
                <br>
                <li class="active"><a href="#1A" data-toggle="tab">Manage Lelang</a></li>
                <li><a href="#1B" data-toggle="tab">Manage Rule</a></li>
                <li><a href="#1C" data-toggle="tab">Manage User</a></li>
                <li><a href="#1D" data-toggle="tab">Manage User Level</a></li>
                <li><a href="#1E" data-toggle="tab">Manage Content</a></li>
                <li><a href="#1F" data-toggle="tab">Manage Voucher</a></li>
                <li><a href="#1G" data-toggle="tab">Approve Beli Point</a></li>
              </ul>
              <br>
              <br>
              <div class="tab-content">
                <hr>
                <!-- Update Barang-->
                  <div class="tab-pane active" id="1A">
                     <h4>
                      <center><strong>
                      Masukan Data Secara Lengkap
                      </strong></center></h4>
                      <hr>
                    <article>
            
                    <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                    <fieldset>
                      
                       
                      <div class="control-group">
                        <label class="control-label" for="name">Nama Barang</label>
                        <div class="controls">
                          <input placeholder="Masukan Nama Barang" type="text" class="input-large" id="name" name="name" style="width:97%">
                        </div>
                        </div>
                      <div class="control-group">
                        <label class="control-label" for="merk">Merk Barang</label>
                        <div class="controls">
                          <input placeholder="Masukan Merk Barang" type="text" class="input-large" id="merk" name="merk" style="width:97%"> 
                        </div>
                        </div>
                      <div class="control-group">
                        <label class="control-label" for="tgl">Tanggal Barang</label>
                        <div class="controls">
                          <input  type="date" class="input-large" id="tgl" name="tgl" style="width:97%">
                        </div>
                        </div>
                      <div class="control-group">
                        <label class="control-label " for="harga">Harga Barang</label>
                        <div class="controls">
                          <input placeholder="Masukan Harga Barang" type="text" class="input-large" id="harga" name="harga" style="width:97%">
                        </div>
                        </div>
                      <div class="control-group">
                        <label class="control-label" for="file" >Upload</label>
                        <div class="controls">
                          <button type="file" name="userfile" size="20" id="file" class="btn btn-warning" style="width:100%">Upload File</button>
                          <br></br>
                          <button class="btn btn-danger" style="width:100%">Delete File</button>
                        </div>
                         <br></br>
                        <div class="controls alert alert-danger" >
                          <center style="width:auto">Perhatian! format file yang diinputkan berupa .jpg .png</center>
                        </div>
                        </div>
                      <div class="control-group">
                        <label class="control-label" for="description">Edit Description</label>
                        <div class="controls">
                          <textarea style="margin: 0px;width: 96%;height: auto;"placeholder="Masukan Deskripsi Anda" type="text" class="input-large" id="description" name="description"></textarea>
                        </div>
                        </div>
                      <div class="control-group">
                        
                        <div class="controls">

                        </div>
                        </div>
                        <div class="form-actions alert alert-warning">
                            <a href="#view" role="button" data-toggle="modal" class="btn btn-danger">Preview</a>
                            <a href="#update" role="button" data-toggle="modal" class="btn btn-danger" >Update</a>
                            <a href="<?php echo site_url('admin/setting');?>" class="btn btn-danger">Back</a>
                        </div>

                        <!-- End update barang-->


<!-- Modal Update-->

<form class="form-horizontal" action="<?php echo site_url('admin/setting'); ?>"  enctype="multipart/form-data">
          <div id="update" class="modal hide fade" style="display: none;box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
            
            <div class="modal-body">
              <h3>Barang Berhasil di Update!</h3>
            </div>
            <div class="modal-footer"style="background-color:#fcf8e3;">
              <a href="<?php echo site_url('admin/setting');?>" class="btn btn-danger">OK</a>
          </div>
        </div>
        </form>

<form class="form-horizontal" action="<?php echo site_url('admin/preview_update_barang'); ?>"  enctype="multipart/form-data">
          <div id="view" class="modal hide fade" style="display: none;box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
             <h4><center><em>Preview Barang</em></center></h4>
            <div class="modal-body">
        <div class="thumbnail">
              <h3>Galaxy Note</h3>
              <hr>
              <p>
              </p>
                <img src="<?php echo base_url('assets/img/a.png'); ?>" alt="">
                <hr>
                <p style="text-align: justify;">
                  When the original Galaxy Note came out it took the world by storm, with its unique shape and size.  Not many people thought a phone that big would be a big seller, but the Galaxy Note proved them wrong.  When Samsung put out its even bigger brother they again revolutionized the Phablet world.  Seems as if any phone over 5 inches will get classified differently than the standard smartphone.  You can also check out the video review of the Samsung Galaxy Note 2 right here.  

                  Samsung Galaxy Note 2 Specs

                  Android 4.1 Jelly Bean

                  5.5-inch Super AMOLED capacitive touchscreen, 16M colors

                  Quad-core 1.6 GHz Cortex-A9

                  Mali-400MP

                  2GB RAM

                  16GB / 32GB / 64GB storage

                  8MP auto focus camera with LED flash, 3264×2448 pixels

                  1.9MP front camera

                  1080p HD video recording at 30fps

                  Wi-Fi, Wi-Fi hotspot,  DLNA, NFC

                  HSUPA 5.76 Mbps, HSDPA 21 Mbps, 4G LTE

                  Bluetooth v4.0, microUSBv2.0

                  GPS, A-GPS support and GLONASS

                  Li-Ion 3100 mAh battery

                  Dimensions: 151.1 x 80.5 x 9.4 mm

                  Weight: 180g

                  Colors: Titanium Gray, Marble White

                  Galaxy Note 2 Design
                  The Note 2 takes a lot of its design cues from the Samsung Galaxy S3, which is fine by many. While slightly heavier than the original Note, it comes in with a bigger screen and thinner than the original Note.

                  No matter how you look at it, putting this phone to your ear will definitely get some looks as it is a huge phone.  However the look of the phone is quite pleasing.  Around the outside of the phone you have your standard 3.5mm headphone jack, the volume rocker and the power button on the right side of the device.  The microUSB connection on the bottom of the device and then the rounded home button and the two capacitive touch buttons make up the entire outside design of the Note 2.

                  Galaxy Note 2 Features

                  Starting with the 5.5” screen the upgrades to the Note 2 are plenty, however it falls short in one key area and that is screen resolution.  It only comes in at 720p now I am not saying that the screen isn’t clear or it comes in grainy because that isn’t the case.  The screen still has a very nice look to it but it could always be better.
                </p>
                <div class="form-actions alert alert-warning">
              
            </div>
            </div>
            </div>
            <div class="modal-footer"style="background-color:#fcf8e3;">
              <a href="<?php echo site_url('admin/update_barang');?>" class="btn btn-danger">Back</a>
              <a href="<?php echo site_url('admin/setting');?>" class="btn btn-danger">Update</a>
          </div>
        </div>
        </form>
 

<!-- End Modal Update-->


                    </fieldset>
                    </form>
        </article>
                    
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
