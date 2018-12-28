<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Laporan Data Master </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Laporan Data Master</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                   <div class="col-sm-9">

            <!-- column 2 -->
  
  <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#customer" data-toggle="tab">Customer</a></li>
                            <li><a href="#transportation" data-toggle="tab">Transportation</a></li>
                            <li><a href="#transportationtype" data-toggle="tab">Transportation Type</a></li>
                            <li><a href="#rute" data-toggle="tab">Rute</a></li>
                            <li><a href="#user" data-toggle="tab">User</a></li>
                            <li><a href="#stasiun" data-toggle="tab">Stasiun</a></li>
                            <li><a href="#bandara" data-toggle="tab">Bandara</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active well" id="customer">
                           <div class="col-sm-12">
                            <div style="margin-bottom : 20px">
                             <a href="<?php echo site_url('laporanmaster/cetakcustomer') ?>" id="print-pengembalian" class="btn btn-primary" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print Customer</a>
                           </div>
                           </div>
                            <table id="d-customer" class="table table-bordered table-dataTable">
                          <thead>
                           <tr>
                            <th>No</th>
                            <th>Customer ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>phone</th>
                            <th>gender</th>
                          </tr>
                           </thead>
                          <tbody>
                          <?php 
                             $i = 1;
                          foreach ($data_customer as $b) {
                           echo "<tr>";
                           echo "<td>".$i."</td>";
                           echo "<td>".$b['customer_id']."</td>";
                           echo "<td>".$b['nama']."</td>";
                           echo "<td>".$b['alamat']."</td>";
                          echo "<td>".$b['nohp']."</td>";
                          echo "<td>".$b['jeniskelamin']."</td>";
                          echo "</tr>";
                           $i++;
                               }
                           ?>
                          </tbody>
                           </table>
                            </div>
                             <div class="tab-pane well" id="transportation">
                             <div class="col-sm-12">
                            <div style="margin-bottom : 20px">
                             <a href="<?php echo site_url('laporanmaster/cetaktransportation') ?>" id="print-pengembalian" class="btn btn-success" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print Transportation</a>
                           </div>
                           </div>
                            <table id="d-transportation" class="table table-bordered table-dataTable">
                            <thead>
                             <tr>
                             <th>No</th>
                             <th>Tranportation ID</th>
                             <th>Code</th>
                             <th>Description</th>
                             <th>Seat Qty</th>
                             <th>Type ID</th>
                             </tr>
                           </thead>
                           <tbody>
                             <?php 
                             $i = 1;
                          foreach ($data_transportation as $b) {
                           echo "<tr>";
                           echo "<td>".$i."</td>";
                           echo "<td>".$b['transportation_id']."</td>";
                           echo "<td>".$b['code']."</td>";
                           echo "<td width='200px'>".$b['deskripsi']."</td>";
                          echo "<td>".$b['seat_qty']."</td>";
                          echo "<td width='155px'>".$b['transportation_type_id']."</td>";
                          echo "</tr>";
                           $i++;
                               }
                           ?>
                             </tbody>
                             </table>
                            </div>
                            <div class="tab-pane well" id="transportationtype">
                              <div class="col-sm-12">
                              <div style="margin-bottom : 20px">
                             <a href="<?php echo site_url('laporanmaster/cetaktransportationtype') ?>" id="print-pengembalian" class="btn btn-danger" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print Transportation Type</a>
                           </div>
                           </div>
                                <table id="d-transportationtype" class="table table-bordered table-dataTable">
                                <thead>
                                 <tr>
                                 <th>No</th>
                                 <th>Type ID</th>
                                 <th>Description</th>
                                </tr>
                                   </thead>
                                 <tbody>
                                <?php 
                                  $i = 1;
                                  foreach ($data_transportationtype as $k) {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  echo "<td width='300px'>".$k['transportation_type_id']."</td>";
                                  echo "<td width='400px'>".$k['description']."</td>";
                                  echo "</tr>";
                                 $i++;
                                  }
                                 ?>
                                  </tbody>
                                 </table>
                                  </div>
                                  <div class="tab-pane well" id="stasiun">
                              <div class="col-sm-12">
                              <div style="margin-bottom : 20px">
                             <a href="<?php echo site_url('laporanmaster/cetakstasiun') ?>" id="print-pengembalian" class="btn btn-secondary" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print Stasiun</a>
                           </div>
                           </div>
                                <table id="d-stasiun" class="table table-bordered table-dataTable">
                                <thead>
                                 <tr>
                                 <th>No</th>
                                 <th>ID Stasiun</th>
                                 <th>Name</th>
                                 <th>City</th>
                                 <th>Abbr</th>
                                </tr>
                                   </thead>
                                 <tbody>
                                <?php 
                                  $i = 1;
                                  foreach ($data_stasiun as $st) {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  echo "<td>".$st['id']."</td>";
                                  echo "<td width='300px'>".$st['name']."</td>";
                                  echo "<td width='200px'>".$st['city']."</td>";
                                  echo "<td>".$st['abbr']."</td>";
                                  echo "</tr>";
                                 $i++;
                                  }
                                 ?>
                                  </tbody>
                                 </table>
                                  </div>
                                  <div class="tab-pane well" id="user">
                              <div class="col-sm-12">
                              <div style="margin-bottom : 20px">
                             <a href="<?php echo site_url('laporanmaster/cetakuser') ?>" id="print-pengembalian" class="btn btn-info" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print User</a>
                           </div>
                           </div>
                                <table id="d-user" class="table table-bordered table-dataTable">
                                <thead>
                                 <tr>
                                 <th>No</th>
                                 <th>User ID</th>
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th>Fullname</th>
                                 <th>Level</th>
                                </tr>
                                   </thead>
                                 <tbody>
                                <?php 
                                  $i = 1;
                                  foreach ($data_user as $u) {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  echo "<td>".$u['userid']."</td>";
                                  echo "<td>".$u['username']."</td>";
                                  echo "<td>".$u['password']."</td>";
                                  echo "<td width='200px'>".$u['fullname']."</td>";
                                  echo "<td>".$u['level']."</td>";
                                  echo "</tr>";
                                 $i++;
                                  }
                                 ?>
                                  </tbody>
                                 </table>
                                  </div>
                                  <div class="tab-pane well" id="rute">
                                   <div class="col-sm-12">
                                  <div style="margin-bottom : 20px">
                                   <a href="<?php echo site_url('laporanmaster/cetakrute') ?>" id="print-pengembalian" class="btn btn-warning" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print Rute</a>
                                 </div>
                                 </div>
                                  <table id="d-rute" class="table table-bordered table-dataTable">
                                         <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Rute ID</th>
                                      <th>Depart At</th>
                                      <th>Depart To</th>
                                       <th>Rute From</th>
                                       <th>Rute To</th>
                                       <th>Price</th>
                                       <th>Transport ID</th>
                                  </tr>
                                 </thead>
                                   <tbody>
                                 <?php 
                                    $i = 1;
                                    foreach ($data_rute as $b) {
                                    echo "<tr>";
                                    echo "<td>".$i."</td>";
                                    echo "<td>".$b['rute_id']."</td>";
                                    echo "<td>".$b['depart_at']."</td>";
                                    echo "<td>".$b['depart_to']."</td>";
                                    echo "<td>".$b['rute_from']."</td>";
                                    echo "<td width='90px'>".$b['rute_to']."</td>";
                                    echo "<td>".$b['price']."</td>";
                                    echo "<td width='140px'>".$b['transportation_id']."</td>";
                                    echo "</tr>";
                                 $i++;
                                     }
                                 ?>
                                 </tbody>
                               </table>
                                  </div>
                                  <div class="tab-pane well" id="bandara">
                              <div class="col-sm-12">
                              <div style="margin-bottom : 20px">
                             <a href="<?php echo site_url('laporanmaster/cetakbandara') ?>" id="print-pengembalian" class="btn btn-secondary" onclick="cetak()"> <span class="glyphicon glyphicon-print"></span> Print Bandara</a>
                           </div>
                           </div>
                                <table id="d-bandara" class="table table-bordered table-dataTable">
                                <thead>
                                 <tr>
                                 <th>No</th>
                                 <th>ID Bandara</th>
                                 <th>Name</th>
                                 <th>City</th>
                                 <th>Abbr</th>
                                </tr>
                                   </thead>
                                 <tbody>
                                <?php 
                                  $i = 1;
                                  foreach ($data_bandara as $st) {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  echo "<td>".$st['bandara_id']."</td>";
                                  echo "<td width='300px'>".$st['name']."</td>";
                                  echo "<td width='200px'>".$st['city']."</td>";
                                  echo "<td>".$st['abbr']."</td>";
                                  echo "</tr>";
                                 $i++;
                                  }
                                 ?>
                                  </tbody>
                                 </table>
                                  </div>
                              </div>
    </div>
      
    </div>
  </div>
</div>

<?php 
$this->load->view('parts/footer');
?>
<script type="text/javascript">
$(function(){
  function cetak() {
      window.location = '<?php echo site_url() ?>/laporanmaster/cetakpengembalian'
    }
 

  

});

</script>
