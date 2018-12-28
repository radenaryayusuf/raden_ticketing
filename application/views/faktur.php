<?php 
$this->load->view('parts/header');
 ?>
 <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  
  <script src="<?php echo base_url() ?>assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
     @page { size: landscape; }
  </script>
  </head>
       <?php 
$this->load->view('parts/navigation');
        ?>        
        <body onload="cetak()">
        <div class="printableArea">
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1><span class="di di-tickets-alt"></span><strong>RadenTicketing</strong><small>.com</small><img src="<?php echo base_url();?>assets/image/logokereta.png" height="80" width="160" align= "Right"><br><br></h1>
                
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                               <table>
    <tr>
      <td width="300"></strong> </td>
      <td width="200"></td>
<!--       <strong><h4>Kode Booking</h4></strong> -->
    </tr>
    <tr>
      <td><br>Nama</td>
      <td colspan="2" ><br><span id="nama" >Raden</span></td>
      <td width="10">&nbsp;</td>
                                            <td style="width: 500px;">&nbsp;</td>
                                            <td><h4><strong>Kode Booking</strong></h4></td>
    </tr>
    <tr>
      <td><br>Tanggal Keberangkatan</td>
      <td colspan="2" id="tanggal" style="width: 21000px;"><br><span id="tanggal_berangkat">Raden</span></td>
      <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 560px;">&nbsp;</td>
                                            <td id="code_reservation"><h3><strong><span id="code_booking">CODE</span></strong></h3></td>
    </tr>
    
    <tr>
        <td><br>Asal - Tujuan</td>
      <td colspan="2" id="asal" style="width: 21000px;"><br><span id="destination">Raden</span></td>
      <td style="width: 100px;">&nbsp;</td>                                    
                                            
                                        </tr>

   
  </table>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default shadow-one">
                           
                            <div class="panel-body scroller" data-height="240px">
                             <table class="table" border="0px ">
                               <input type="hidden" id="nama2" value="<?php echo $nama_wakil ?>">         
                               <input type="hidden" id="adult2" value="<?php echo $amount_of_adult_faktur ?>">
                               <input type="hidden" id="infant2" value="<?php echo $amount_of_infant_faktur ?>">
                               <input type="hidden" id="pricesum2" value="<?php echo $price_sum_faktur ?>">
                               <input type="hidden" id="tanggal2" value="<?php echo $tanggal_pesan_faktur ?>">
                               <input type="hidden" id="hargaorang2" value="<?php echo $harga_perorang_faktur ?>">
                               <input type="hidden" id="deskripsi2" value="<?php echo $deskripsi_booking_faktur ?>">
                               <input type="hidden" id="bookingcode2" value="<?php echo $random_code_faktur ?>">
                               <input type="hidden" id="stasiun_dari" value="<?php echo $nama_stasiun2 ?>">
                               <input type="hidden" id="stasiun_ke" value="<?php echo $nama_stasiun3 ?>">
                                
                                     
                                        
                                        <tr>
                                            <td id="deskripsi_confir" width="200">Description </td>
                                            <td id="person1" width="300">Person</td>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 300px;">&nbsp;</td>
                                            <td id="price1" width="200">Price</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td id="person2">Person</td>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 300px;">&nbsp;</td>
                                            <td id="price2">Price</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td>You pay</td>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 300px;">&nbsp;</td>
                                            <td id="sum_of_price">Price</td>
                                        </tr>
                                 
                                </table>
                               <strong> Butuh Bantuan? </strong> Hubungi Customer Service Kami di <strong> (021) 83782020 </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               
                            </div>

                        </div>
                    </div>
                    
                   
                    
                   
                    
                 
                    
                </div>
                    
                </div>
                
            </div> 
          </div>
             <!--END: Content Wrap-->
              <!-- END: Main Container -->
        
       <?php 
$this->load->view('parts/footer');
        ?>
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.PrintArea.js"></script>
 <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        var nama = $('#nama2').val()
        var adult = $('#adult2').val()
        var infant = $('#infant2').val()
        var pricesum = $('#pricesum2').val()
        var tanggal = $('#tanggal2').val()
        var hargaperorang = $('#hargaorang2').val()
        var deskripsi = $('#deskripsi2').val()
        var bookingcode = $('#bookingcode2').val()
        var darinama = $('#stasiun_dari').val()
        var kenama = $('#stasiun_ke').val()
        
        $('#deskripsi_confir').html(deskripsi);
        $('#person1').html('Adult Fare (x '+adult+')');
        $('#code_booking').html(bookingcode);
        $('#price1').html('Rp '+hargaperorang * adult);
        $('#person2').html('Infant Fare (x '+infant+')');
        $('#price2').html('Rp 0');
        $('#sum_of_price').html('Rp '+hargaperorang * adult);
        $('#nama').html(nama);
        $('#tanggal_berangkat').html(tanggal);
        $('#destination').html(darinama+' - '+kenama);
        
        Site.run();
      });
    })(document, window, jQuery);
     function cetak(){
      window.print();
    }

    
  </script>
</body>