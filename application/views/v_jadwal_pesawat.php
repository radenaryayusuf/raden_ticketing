<?php 
$this->load->view('parts/header');
//$this->load->view('parts/navigation');
 ?>
 <?php 
$this->load->view('parts/navigation');
//$this->load->view('parts/navigation');
 ?>
<?php 
if($this->session->userdata('user')=='1'){
  $this->load->view('parts/navigation');
}elseif ($this->session->userdata('user')=='2'){
  $this->load->view('parts/nav_operator');
}
  ?> 
  <div class="printableArea">
    <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
              <div class="judulscreen">
                

              </div>
           <div class="judulcetak"> 
                <h1><span class="di di-tickets-alt"></span><strong>RadenTicketing</strong><small>.com</small><img src="<?php echo base_url();?>assets/image/logokereta.png" height="80" width="160" align= "Right"><br><br></h1>
            </div>
                
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                <h3 class="panel-title">Flight's Schedule Report</h3>
                            
                              
                            </div>
                            <div class="panel-body">
                                 <table class="table table-bordered" id="laporan">
  <thead>


   <tr>
    <th>No.</th>
    <th>Depart From</th>
    <th>Airline Name</th>
    <th>Depart To</th>
    <th>Time</th>
    <th>Price(Rp.)</th>
    <th>Seat</th>
    <th>Reserved</th>
    
  </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
  
 foreach ($data_from as $u) {
  $dep_to = $this->l->getTo($u['rute_to']);
  $res = $this->l->getAR($u['rute_id']);
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$u['name']."(".$u['abbr'].")".$u['city']."</td>";
    echo "<td>".$u['deskripsi']."</td>";
    echo "<td>".$dep_to."</td>";
    echo "<td>".$u['depart_at']."-".$u['depart_to']."</td>";
    echo "<td>".$u['price']."</td>";
    echo "<td>".$u['seat_qty']."</td>";
    echo "<td>".$res."</td>";
    
    echo "</tr>";
    $i++;
  }
  
  ?>  

  </tbody>
  

</table>
                                <div class="action">
                            
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                   
                    
                   
                    
                 
                    
                </div>
                    
                </div>
                
 
          
</div>
        </section><!-- /.content -->
     

    <div class="row mt">
      <label class="col-md-3"></label>
        <a href="#" id="cetakjadwalpesawat"  class="btn btn-primary"><span class="glyphicon glyphicon-cloud-print"></span>CETAK</a>

    </div>
    <br>
           </div><!-- /.content-wrapper -->
 </div><!-- /.box -->

</div>
</div>
  --> <?php 
    $this->load->view('parts/footer');
     ?>
 <script src="<?php echo base_url() ?>assets/assets/js/jquery.PrintArea.js"></script>
   <script>
    (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {
                 
                // aksi ketika tombol cetak ditekan
                $("#cetakjadwalpesawat").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('.printableArea').printArea();
                });
            });
        }) (jQuery);

   

   </script>