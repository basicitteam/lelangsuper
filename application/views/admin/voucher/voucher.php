<div class="span9">
	<div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Voucher</h3>
        <br></br>
        <div class="span9">
          	<br>
          	<center>
          		<a href="<?php echo site_url("admin/voucher") ?>" class="active btn btn-warning">Input Jenis Voucher </a>
          		<a href="<?php echo site_url("admin/voucher/generate") ?>" class="btn btn-warning">Generate Voucher</a>
          	</center>
          	<hr>
   			<br>
		   				<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Voucher</th>
									<th>Jumlah Saldo</th>
									<th>Harga Voucher</th>
									<th colspan="2">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Small</td>
									<td>25</td>
									<td>Rp. 50.000,00</td>
									<td><a class="btn btn-danger">Delete</a></td>
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
                        <center>
			          		<a data-toggle="modal" data-target="#add" class="btn btn-warning">Tambah Jenis Voucher</a>
			          	</center>
			          	<br>


<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Tambah Jenis Voucher</h3>
  </div>
  <div class="modal-body">
   <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
    <fieldset>
        <div class="control-group">
          <label class="control-label">Nama Voucher</label>
            <div class="controls">
              <input placeholder="Masukan Nama Voucher"  class="input-large" type="text">
            </div>
        </div>
        <div class="control-group">
          <label class="control-label">Jumlah Saldo</label>
            <div class="controls">
              <input placeholder="Masukan Jumlah Saldo"  class="input-large" type="text">
            </div>
        </div>
        <div class="control-group">
          <label class="control-label">Harga Voucher</label>
            <div class="controls">
              <input placeholder="Masukan Harga Voucher"  class="input-large" type="text">
            </div>
        </div>
    </fieldset>
   </form>  
  </div>
  <div class="modal-footer">
    <form id="form-belipoint" method="post" action="<?php echo site_url('admin/voucher'); ?>">
  <input id="id" type="hidden" name="id_paket" value=""/>
  <button type="submit" class="btn btn-danger">Tambah</button>
  <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </form>
  </div>
</div>
			</div>
</div>
</div>