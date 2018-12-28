<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        
        <?php 
        $array_kursi = [];
        // $atoz = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        if (sizeof($bereum_korsi)) {
            foreach ($bereum_korsi as $sr => $seat_result_red) {
                $array_kursi[] = intval($seat_result_red['seat_code']);
            }
        }

         ?>
        <style type="text/css">
            
#holder{    
height:300px;    
width:790px;
background-color:#F5F5F5;
border:1px solid #A4A4A4;
margin-left:10px;   

}
#place {
position:relative;
margin:30px;
}
#place a{
font-size:0.6em;
}
#place li
{
 list-style: none outside none;
 position: absolute;   
 cursor: pointer;
}    
/*#place li:hover
{
background-color:yellow;      
}*/ 
#place .seat{
background:url("<?php echo base_url(); ?>assets/image/available.png") no-repeat scroll 0 0 transparent;
height:34px;
width:30px;
display:block;   
}
#place .selectedSeat
{ 
background:url("<?php echo base_url();?>assets/image/unavailable.png");          
}
#place .selectingSeat
{ 
background:url("<?php echo base_url();?>assets/image/choose.png"); 
    
}
#place .row-3, #place .row-4{
margin-top:40px;
}
#seatDescription li{
verticle-align:middle;    
list-style: none outside none;
padding-left:35px;
height:35px;
float:left;
}
        </style>
 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Flight Booking </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Transaksi</a></li>
                    <li class="active"> Booking</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
               <div class="row">
                   

                    <?php 
                        for ($i=1; $i<=$amount_of_adult ; $i++) { 
                            
                        
                     ?>
                                         <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Passenger's Info <?php echo $i ?></h3>
                            </div>
                            <div class="panel-body">
                                <blockquote>
                                    <form role="form" class="insert_pelanggan" id="formvalidationtooltip">
                                    <div class="form-body">

                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input type="hidden" name="kode_pesan[]" id="kode_pesan" value="<?php echo $idreservation ?>">
                                            <input type="text" class="form-control validate[required]" name="nama[]" id="nama" placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control validate[required]" name="alamat[]" id="alamat" placeholder="Alamat Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control validate[required]" name="nohp[]" id="nohp" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_laki" value="L" name="jeniskelamin[]" checked>
                                        <label for="inlineRadio1"> Laki-laki </label>
                                    </div>

                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_perempuan" value="P" name="jeniskelamin[]">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
                                  </div>
                                  <input type="hidden" name="rute_id_booking" id="rute_id_booking" value="<?php echo $kode_rute ?>">
                                            <input type="hidden" name="amount_seat" id="amount_seat" value="<?php echo $amount_of_seat ?>">
                                            <input type="hidden" name="amount_adult" id="amount_adult" value="<?php echo $amount_of_adult ?>">
                                            <input type="hidden" name="amount_infant" id="amount_infant" value="<?php echo $amount_of_infant ?>">
                                            <input type="hidden" name="price_sum" id="price_sum" value="<?php echo $price_sum ?>">
                                            <input type="hidden" name="reservation_date" id="reservation_date" value="<?php echo $tanggal_pesan ?>">
                                            <input type="hidden" name="reservation_code" id="reservation_code" value="<?php echo $random_code ?>">
                                            <input type="hidden" id="seat_code<?php echo $i ?>" name="seat_code[]" />
                                        <!-- <div class="form-actions fluid">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-info" id="continue">Continue</button>
                                        </div>
                                    </div> -->
                                    

                                    </div>
                                </form>
                                </blockquote>
                            </div>
                        </div>
                 </div>

<?php 
}
 ?>

  <?php 
                        for ($a=1; $a<=$amount_of_infant ; $a++) { 
                            
                        
                     ?>
                                         <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Infant's Info <?php echo $a ?></h3>
                            </div>
                            <div class="panel-body">
                                <blockquote>
                                    <form role="form" class="insert_infant" id="formvalidationtooltip">
                                    <div class="form-body">

                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control validate[required]" name="nama" id="nama" placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_laki" value="L" name="jeniskelamin" checked>
                                        <label for="inlineRadio1"> Laki-laki </label>
                                    </div>

                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_perempuan" value="P" name="jeniskelamin">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
                                  </div>
                                    

                                    </div>
                                </form>
                                </blockquote>
                            </div>
                        </div>
                 </div>

<?php 
}
 ?>
                                           <div class="form-actions fluid">
                                            
                                        <div class="col-md-12 text-right">
                                            <!-- <button type="submit" class="btn btn-warning-outline" id="continue">Select Seat</button> -->
                                            <button type="submit" class="btn btn-success-outline" id="process_it">Process</button>
                                        </div>
                                    </div>

               </div>
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
      

        <div class="modal modal-secondary fade" id="ModalFaktur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Contact Information</h4>
                </div>
                <form method="post" action="<?php echo site_url('reservation_plane/proses_faktur'); ?>" role="form">
            
                <div class="modal-body">
                    

                                         <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control validate[required]" name="nama_faktur2" id="nama_faktur" placeholder="Full Name" data-prompt-position="topLeft">
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_laki" value="L" name="jeniskelamin" checked>
                                        <label for="inlineRadio1"> Laki-laki </label>
                                    </div>

                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_perempuan" value="P" name="jeniskelamin">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
                                     <input type="hidden" name="amount_adult2" id="amount_adult2" value="<?php echo $amount_of_adult ?>">
                                            <input type="hidden" name="amount_infant2" id="amount_infant2" value="<?php echo $amount_of_infant ?>">
                                            <input type="hidden" name="price_sum2" id="price_sum2" value="<?php echo $price_sum ?>">
                                            <input type="hidden" name="reservation_date2" id="reservation_date2" value="<?php echo $tanggal_pesan ?>">
                                            <input type="hidden" name="reservation_code2" id="reservation_code2" value="<?php echo $random_code ?>">
    <input type="hidden" id="harga_per_orang2" name="harga_per_orang2" value="<?php echo $harga_perorang ?>" />
  <input type="hidden" id="deskripsi_booking2" name="deskripsi_booking2" value="<?php echo $deskripsi_booking ?>" />
  <input type="hidden" name="nama_stasiun" id="nama_stasiun" value="<?php echo $stasiun_nama ?>">
  <input type="hidden" name="nama_stasiun1" id="nama_stasiun1" value="<?php echo $stasiun_nama1 ?>">
                                  </div>
                                    

                                    </div>

             
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="proses_faktur">Proses</button>
                </div>
                  </form>
                 </div>
            </div>
        </div>
<!-- Modal Kursi -->
    <div class="modal modal-secondary fade" id="ModalSeat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Please choose the seats first</h4>
                </div>
                <form method="post"  role="form">

                <div class="modal-body">
                  <h5> Choose seats by clicking the corresponding seat in the layout below :</h5>
                   
                  
                   <div>&nbsp;</div>
    <div id="holder">

        <ul  id="place">

        </ul> 

    </div>
    <div style="float:left;"> 
    <ul id="seatDescription">
       <!--  <li style="background:url('<?php echo base_url();?>assets/image/car-seat.png') no-repeat scroll 0 0 transparent;">Active Seat</li> -->
        <li style="background:url('<?php echo base_url();?>assets/image/available.png') no-repeat scroll 0 0 transparent;">Available Seat</li>
        <li style="background:url('<?php echo base_url();?>assets/image/unavailable.png') no-repeat scroll 0 0 transparent;">Booked Seat</li>
        <li style="background:url('<?php echo base_url();?>assets/image/choose.png') no-repeat scroll 0 0 transparent;">Selected Seat</li>

    </ul>

                                        </div>
                                        
        <div style="clear:both;width:100%">
<input type="hidden" id="seat_codearray" name="seat_code2" />
        <!-- <input type="button" id="btnShowNew" value="Show Selected Seats" />
        <input type="button" id="btnShow" value="Show All" /> -->         
        </div>
                </div>
                <div class="modal-footer">
<!--                     <div style="float: left;">
        <label>&nbsp;</label>
        <div id="combo_seat">
    <select name="somename" id="jumlah_pelanggan" class="form-control custom-Select">
                                                <option>0</option>
                                            </select>
                                        </div>
                                      </div>     
 -->    
                    <input type="button" class="btn btn-default" id="close_btn" value="Close">
                </div>
                </form>
            </div>
        </div>
    </div>
  <?php 
$this->load->view('parts/footer');
        ?>

        <script>
     function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }


            $(document).ready(function(){
$('#ModalSeat').modal();
    //               var rute_id =$('#rute_id_booking').val();
    //    var url = "<?php echo base_url()?>index.php/reservation_plane/get_kursi/"+rute_id;
    // $.get(url,function(e){
        
    //   console.log(e);
    //   // $('#name_stasiun1').val(e);
    // })

                $('#process_it').click(function(e){
            e.preventDefault();
            if ($('#nama').val() != "") {
               $.ajax({
                url: '<?php echo base_url()?>index.php/reservation_plane/simpan',
                type: "POST",
                data: $('.insert_pelanggan').serializeArray(), //serialize() untuk mengambil semua data di dalam form
                dataType: "html",
                success: function(){   
                 $('#ModalFaktur').modal();
                    //     var address = "<?php echo base_url() ?>index.php/reservation_plane/faktur_train/"+
                    //     kode_kredit;
                    //     var thePopup = window.open(address,"Kuitansi","menubar=0,location=0,height=500,width=860");
            // window.location.replace("<?php echo site_url('reservation_plane'); ?>");       
            // window.alert('input berhasil mang');

            },
            error: function(){
                window.alert('Ada kesalahan saat input data');
            }
});  
           }else{
            alert('Mohon untuk data diisi dengan lengkap'); 
           }
           
   });
        //      var total_adult = $('#amount_adult').val();
        //         if (total_adult == 1) {
        //     $('#combo_seat select')
        //     .find('option')
        //     .remove()
        //     .end()
        //     .append('<option value="0">Pelanggan ke 1</option>')
        // }else if (total_adult == 1) {
        //     $('#combo_seat select')
        //     .find('option')
        //     .remove()
        //     .end()
        //     .append('<option value="0">Pelanggan ke 1</option>')
        //     .append('<option value="0">Pelanggan ke 2</option>')
        // }

                if ($('#seat_code').val() == '') {
                    document.getElementById("process_it").disabled = true;
                    $('#ModalSeat').modal('hide');
                }
                $('#close_btn').click(function(){
                    if ($('#seat_code').val() != '' ){
                    document.getElementById("process_it").disabled = false;
                    $('#ModalSeat').modal('hide');
                }
                })
                // if ($('#ModalSeat').modal('hide')) {
                //      if ($('#seat_code').val() == $('#seat_code2').val()){
                //     document.getElementById("process_it").disabled = false;
                // }
           // $('#continue').click(function(){
            
           // })

var settings = {
 
               rows: 5,
               cols: $('#amount_seat').val() / 5,
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 50,
               seatHeight: 40,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };
           var init = function (reservedSeat) {
                var str = [], seatNo, className;
                // var atoz = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (i + j * settings.rows + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                     
                    }
          
                    
                }
                $('#place').html(str.join(''));
                // if ($('#amount_adult').val() === settings.selectingSeat.)
            };

           
            //case I: Show from s/tarting
            //init();
 
            //Case II: If already booked
          
            var bookedSeats = <?php echo @json_encode($array_kursi); ?> ;

            init(bookedSeats);

$('.' + settings.seatCss).click(function () {

if ($(this).hasClass(settings.selectedSeatCss)){
    alert('This seat is already reserved');
}
else if ($('#amount_adult').val() <=  $('.'+settings.selectingSeatCss).length ) {
                if ($(this).hasClass(settings.selectingSeatCss)) {
    $(this).toggleClass(settings.selectingSeatCss);
}else{
       alert('The chair you ordered was just '+$('#amount_adult').val());
}
 


            }
else if($('#amount_adult').val() >=  $('.'+settings.selectingSeatCss).length ){
    $(this).toggleClass(settings.selectingSeatCss);
                     var jml_seat = [], items;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        items = $(this).attr('title');                   
        jml_seat.push(items);                   
    });
    $('#seat_codearray').val(jml_seat.join(','));

        if ($('#seat_code1').val() == '' && $('#seat_code2').val() == '' && $('#seat_code3').val() == '' && $('#seat_code4').val() == '') {
 $('#seat_code1').val(items);
        return true;
        }else if ($('#seat_code1').val() == '' && $('#seat_code2').val() == '') {
 $('#seat_code1').val(items);
        return true;
        }else if ($('#seat_code1').val() == '') {
 $('#seat_code1').val(items);
        return true;
        }else if ($('#seat_code1').val() == '' && $('#seat_code2').val() == '' && $('#seat_code3').val() == '') {
 $('#seat_code1').val(items);
        return true;
        }
   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if ($('#seat_code1').val() != '' && $('#seat_code2').val() == '' && $('#seat_code3').val() == '' && $('#seat_code4').val() == '') {
            
        $('#seat_code2').val(items);
        return true;

        }else if ($('#seat_code1').val() != '' && $('#seat_code2').val() == '' && $('#seat_code3').val() == '') {
            
        $('#seat_code2').val(items);
        return true;
    }else if($('#seat_code1').val() != '' && $('#seat_code2').val() == '') {
            
        $('#seat_code2').val(items);
        return true;

        }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if ($('#seat_code1').val() != '' && $('#seat_code2').val() != '' && $('#seat_code3').val() == '' && $('#seat_code4').val() == '') {
            
        $('#seat_code3').val(items);
        return true;

        }else if ($('#seat_code1').val() != '' && $('#seat_code2').val() != '' && $('#seat_code3').val() == '') {
            
        $('#seat_code3').val(items);
        return true;

        }     
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if ($('#seat_code1').val() != '' && $('#seat_code2').val() != '' && $('#seat_code3').val() != '' && $('#seat_code4').val() == '') {
            
        $('#seat_code4').val(items);
        return true;

        }  
    

    }else{
        $(':input[type="button"]').prop('disabled', true);
    }
});
$('.' + settings.selectingSeatCss).click(function () {
    
    
if ($(this).hasClass(settings.selectingSeatCss)) {
    $(this).toggleClass(settings.SeatCss);

}
 });
$('#btnShow').click(function () {
    var str = [];
    $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
    });
    alert(str.join(','));
})
 
$('#btnShowNew').click(function() {
    var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');                   
        str.push(item);                   
    });
    alert(str.join(','));
})
$('#btnShowNew').click(function() {
    var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');                   
        str.push(item);                   
    });
    alert(str.join(','));
})
      <?php 
                        for ($i=1; $i<=$amount_of_adult ; $i++) { 
                            
                        
                     ?> 
    $('#pilih_pelanggan<?php echo $i ?>').click(function(){
            alert(<?php echo $i ?>);

           })
    <?php } ?>
    
           });
  </script>