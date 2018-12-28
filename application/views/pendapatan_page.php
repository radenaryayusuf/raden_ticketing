<?php 
$this->load->view('parts/header');
 ?>
 <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  
   <!-- css yang digunakan ketika dalam mode screen -->
    <link href="<?php echo base_url() ?>assets/laporan/stylependapatan.css" rel="stylesheet" media="screen">
     
    <!-- ss yang digunakan tampilkan ketika dalam mode print -->
    <link href="<?php echo base_url() ?>assets/laporan/printpendapatan.css" rel="stylesheet" media="print">

  </head>
       <?php 
$this->load->view('parts/navigation');
        ?>        
        <body>
        <div class="printableArea">
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
              <div class="judulscreen">
                <h3>Laporan Pendapatan </h3>

              </div>
           <div class="judulcetak"> 
                <h1><span class="di di-tickets-alt"></span><strong>RadenTicketing</strong><small>.com</small><img src="<?php echo base_url();?>assets/image/logokereta.png" height="80" width="160" align= "Right"><br><br></h1>
            </div>
                
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <div class="tanggal">
                              <div class="col-md-3">
                                    <label>Tanggal Awal</label>
                                    <div class="input-group">
                                          <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" id="tgl_awal" name="tgl_awal">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggal Akhir</label>
                                    <div class="input-group">
                                          <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" id="tgl_akhir" name="tgl_akhir">
                                    </div>
                                </div>

                                <h3 class="panel-title"></h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                                                       
                                </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped" id="train_rute">
                                    <thead>
                                        <tr>
                                            
                                            <th>Tanggal</th>
                                            <th>Jumlah Transaksi</th>
                                            <th>Total Omset</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody id="show_pendapatan">
                                         
                                    </tbody>
                                </table>
                                <div class="action">
                                <button type="button" class="btn btn-labeled btn-secondary" id="cetakpendapatan"><span class="btn-label"><i class="ti-printer"></i></span>Cetak</button>
                                </div> 
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
   

      $(document).ready(function($) {
       
        $('#tgl_awal').change(function(){
        
      var tanggal_awal = $('#tgl_awal').val();
                var tanggal_akhir = $('#tgl_akhir').val();
               
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>index.php/laporanpendapatan/getpendapatan',
                async : false,
                dataType : 'json',
                data : {tgl_awal:tanggal_awal , tgl_akhir:tanggal_akhir},
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        
                        html += '<tr>'+
                                '<td>'+data[i].reservation_date+'</td>'+
                                '<td>'+data[i].JMLTRANSAKSI+'</td>'+
                                '<td>'+data[i].TOTALOMSET+'</td>'+
                                '</tr>';
                    }
                    $('#show_pendapatan').html(html);
                  
                }
 
            });
    });
         $('#tgl_akhir').change(function(){
        
      var tanggal_awal = $('#tgl_awal').val();
                var tanggal_akhir = $('#tgl_akhir').val();
               
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>index.php/laporanpendapatan/getpendapatan',
                async : false,
                dataType : 'json',
                data : {tgl_awal:tanggal_awal , tgl_akhir:tanggal_akhir},
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        
                        html += '<tr>'+
                                '<td>'+data[i].reservation_date+'</td>'+
                                '<td>'+data[i].JMLTRANSAKSI+'</td>'+
                                '<td>'+data[i].TOTALOMSET+'</td>'+
                                '</tr>';
                    }
                    $('#show_pendapatan').html(html);
                  
                }
 
            });
    });
        
      });
       (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {
                 
                // aksi ketika tombol cetak ditekan
                $("#cetakpendapatan").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('.printableArea').printArea();
                });
            });
        }) (jQuery);

   
  </script>
</body>