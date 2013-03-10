<div class="span9">
	<div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Voucher</h3>
        <br></br>
        <ul class="thumbnails " >
          	<li class="span9 " style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
          	<br>
          	<center>
          		<a href="<?php echo site_url("admin/voucher") ?>" class="btn btn-warning">Input Jenis Voucher </a>
          		<a href="<?php echo site_url("admin/generate") ?>" class="active btn btn-warning">Generate Voucher</a>
          	</center>
          	<hr>
   			<br>
   			<div class="span4">
   							<fieldset>
   							<div class="control-group">
								
								<div class="controls">
									<select id="voucher" name="voucher">  
										<option>- Pilih Jenis Voucher -</option>
										<option>Small</option>
										<option>Large</option>
										<option>Extra large</option>
										<option>Extra extra Large</option>
										<option>Super Extra Large</option>
									</select>
								</div>
						    </div>
						    </fieldset>
			</div>
						    <div class="span4 pull-right">
						    	 <center><b>Quantity</b>
                        	<input placeholder=" Masukan Jumlah Voucher" > <button href="#" class="btn btn-warning"> Genarate</button>
                        </center>
						    </div>
						    
		   				<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Voucher</th>
									<th>No Voucher</th>
									<th colspan="2">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Small</td>
									<td>3543132833010691</td>
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
                       
                        <br>
			</ui>
		</ul>
</div>
</div>