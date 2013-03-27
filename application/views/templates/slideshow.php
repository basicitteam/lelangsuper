
		<div class="row">
			<div class="span12" >
				<div id="myCarousel" class="carousel slide" >
				  <!-- Carousel indicator -->
				  
				  <p id="nav2" class="carousel-indicators" style="right: 450px;">
					<a data-target="#myCarousel" data-slide-to="0" class="active"><i class="icon-star"></i>1</a>
					<a data-target="#myCarousel" data-slide-to="1" class=""><i class="icon-play-circle"></i>2</a>
					<a data-target="#myCarousel" data-slide-to="2" class=""><i class="icon-th"></i>3</a>
				  </p>
				  <!-- Carousel items --> 
				  <div class="carousel-inner">
				  	<?php
				  	foreach($slideshow as $key) {
				  	?>
				  	<div <?php if($slideshow[0] == $key){ echo 'class="item active"'; }else{ echo 'class="item"'; } ?>> 				    	
						<img src="<?php echo base_url('assets/uploads/slideshow/'.$key['gambar']); ?>" alt="<?php echo $key['gambar']; ?>"/>
					</div>
				  	<?php	
				  	}
				  	?>
				  </div>
				  <div class="carousel-caption" style="position:absolute; left:70%; right:5.5%; background:rgba(255, 240, 224, 0.75); box-shadow: 5px -8px 10px #ccc;">
								<h3><a class="btn btn-large btn-block btn-warning" style="background:rgba(255, 153, 0, 0.75);" href="#"><i class="icon-star-empty"></i>  Testimonial</a></h3>
								<hr>
								<center><h3><a class="btn btn-large btn-block btn-warning" style="background:rgba(255, 153, 0, 0.75);" href="#">How it Works</a></h3></center>
								<hr>
								<center><h3><a class="btn btn-large btn-block btn-warning" style="background:rgba(255, 153, 0, 0.75);" href="#">Super Feature</a></h3></center>
				  </div>			  
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div><!-- End Carousel -->
			</div>
		</div><!-- End Row Slideshow -->
