</div>
		<div class="row-fluid">
			<div class="span12">
				<hr>
				<footer>
					<p class="pull-left"><a href="http://www.basicitteam.com" target="_blank">Basic IT Team</a> 2013</p>
				</footer>
			</div>
		</div>
		</div><!-- /row-fluid -->
	</div><!-- /container-fluid -->

	<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
    <link href="<?php echo base_url('assets/css/jquery-ui-1.10.0.custom.min.css'); ?>" rel="stylesheet" media="screen">
    <script src="<?php echo base_url('assets/js/jquery-ui-1.10.0.custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui-timepicker-addon.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/tiny_mce/tiny_mce.js'); ?>"></script>
    <script type="text/javascript">
    $.ajaxSetup({ cache: false });
    var base_url = '<?php echo base_url(); ?>';
    var site_url = '<?php echo site_url(); ?>';

    //On Document Ready
    $(document).ready(function() {

    //buat jquery datepicker biasa
    $("#datepicker").datepicker({
        changeMonth : true,
        changeYear : true,
        dateFormat: "dd M yy",
        maxDate : -6570,
    });
    //buat datetime picker
    $('.datetimepicker').datetimepicker();

    //buat reset modal ketika modal diclose
    $('body').on('hidden', '.modal', function () {
      $(this).removeData('modal');
    });

    //tinymce
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect|,bullist,numlist",
        theme_advanced_buttons2 : "outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,code,|,forecolor,backcolor,|,tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr",
    });
	});
    </script>
  </body>
</html>
