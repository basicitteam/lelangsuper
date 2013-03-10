    </div><!-- End Container -->
    <hr>
    <div id="footer">
        <div class="container">
        <div style="background:url(#) center right no-repeat; width:auto;margin:0 auto;padding:70px;text-align:center;border-top:15px solid #fce587;   background:#FFFFFF;width:absolute;margin:0 auto;-moz-box-shadow: 0px -2px 7px #ccc; /* Firefox */-webkit-box-shadow: 0px -2px 7px #ccc; /* Safari and Chrome */box-shadow: 0px -2px 7px #ccc;text-align: center;color:rgb(223, 138, 30);text-decoration:none;">
            <ul >
                
                    <a class="ftitle" href="#" >FAQ</a><td></td>
                    <a class="ftitle" href="#" >Syarat dan Ketentuan</a>
                    <a class="ftitle" href="#">Info Lelang</a>
                    <a class="ftitle" href="#">    Subscribe and get updates</a>
                    <a class="ftitle" href="#">   Hubungi Kami</a>
                
            </ul>
            <ul>
                <center>
                    <a href="http://www.basicitteam.com">Copyright by Basic IT Team</a>
                </center>
            </ul>
            
        </div>

   
    </div>
    </div>
    <link href="<?php echo base_url('assets/css/jquery-ui-1.10.0.custom.min.css'); ?>" rel="stylesheet" media="screen">
    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui-1.10.0.custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/chat.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui-timepicker-addon.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.countdown.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-carousel.js'); ?>"></script>
    <script type="text/javascript">
    $.ajaxSetup({ cache: false });
    var base_url = '<?php echo base_url(); ?>';
    var site_url = '<?php echo site_url(); ?>';
    
    function serverTime(){ 
    var time = null; 
    $.ajax({url: site_url+'/user/lelang/get_time', 
        async: false, dataType: 'text', 
        success: function(text) { 
            time = new Date(text); 
        }, error: function(http, message, exc) { 
            time = new Date(); 
    }}); 
    console.log('Time '+time);
    return time; 
    }

    function highlightLast5(periods) { 
        if($.countdown.periodsToSeconds(periods) < 7) { 
            $(this).addClass('highlight');
            if($.countdown.periodsToSeconds(periods) == 0){
                $(this).html('<p>Berakhir</p>');
                $(this).removeClass('highlight, hasCountdown');
            } 
        }
        else{
            $(this).removeClass('highlight');
        } 
    } 
    //function buat cek status lelang, apakah dalam masa absen atau sudah dimulai
    function get_status_lelang(id){
        $.getJSON(site_url+'/user/lelang/get_status/'+id,function(data){
            
            //set countdown
            $('div#countdownlelang').countdown({
                    until: new Date(data.time * 1000),
                    onTick: highlightLast5,
                    expiryText: 'Berakhir'
                });
            $('div#countdownlelang').countdown('option',{until: new Date(data.time * 1000), serverSync: serverTime});
            console.log(data);

            //list bidder
            $('table#list-bidder tbody').html('');
            $.each(data.bidder,function(index,value){
                $('table#list-bidder').append('<tr><td>'+value.username+'</td><td>Rp. '+value.bid+'</td></tr>');
            });

            //harga lelang
            $('.hargalelang').html(data.harga);
            $('#hargalelang').html('Rp. '+data.harga);
            //console.log($('td#hargapasar').data('harga'));
            var harga = $('td#hargapasar').data('harga');
            $('#penghematan').html(data.hemat);
            $('#penawartertinggi').html(data.pemenang.username);
        });
    }

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

    //jquery trigger buat modal pembelian point
    $('button.belipoint').click(function()
        {
            $('div#modal-belipoint div.modal-footer form#form-belipoint input#id').val($(this).data('id'));
            //$('div#modal-belipoint').modal();
        });

    //Jquery buat Countdown
    $('.countdown').each(function(){
        //console.log('Original : '+$(this).html());
        $(this).countdown({until: new Date($(this).data('time') * 1000),expiryText: 'Berakhir', serverSync: serverTime});
        //console.log('Converted : '+new Date($(this).data('time') * 1000));
    });
    });

    /*############## function bwt lelang ###############*/
    //buat get status lelang tsb
    if($('#id_lelang').data('id') != undefined){
        setInterval(function(){get_status_lelang($('#id_lelang').data('id'));},1000);
        //get_status_lelang($('#id_lelang').data('id'));
    }

    //buat munculin layer info lelang di photo
    $('#info-lelang').hide();
    $('#btn-info').hover(function(){ $('#info-lelang').show('10000'); },function(){ $('#info-lelang').hide('10000'); });

    //buat tawar/absen
    $('button#tawar').click(function(){
        $.getJSON(site_url+'/user/lelang/tawar/'+$('#id_lelang').data('id'),function(data){
            if(data.status == 'false'){
                alert(data.msg);
            }
            else{
                console.log(data.msg);
            }
        });
    });
    </script>
  </body>
</html>
