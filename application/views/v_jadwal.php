<?php 
$this->load->view('parts/header');
//$this->load->view('parts/navigation');
 ?>
<?php 
if($this->session->userdata('user')=='1'){
  $this->load->view('parts/navigation');
}elseif ($this->session->userdata('user')=='2'){
  $this->load->view('parts/nav_operator');
}
  ?> 

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
   
   
    
         <div id="tabel_responsive">
     <table class="table table-bordered" id="laporan">
  <thead>


   <tr>
    <th>No.</th>
    <th>Depart From</th>
    <th>Train Name</th>
    <th>Depart To</th>
    <th>Time Depart</th>
    <th>Time Arrive</th>
    <th>Price</th>
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
    echo "<td>".$u['depart_at']."</td>";
    echo "<td>".$u['depart_to']."</td>";
    echo "<td>".$u['price']."</td>";
    echo "<td>".$u['seat_qty']."</td>";
    echo "<td>".$res."</td>";
    
    echo "</tr>";
    $i++;
  }
  
  ?>  

  </tbody>
  

</table>
    </div>
  </div><!-- /.box-body -->
          

        </section><!-- /.content -->
     

    <div class="row mt">
      <label class="col-sm-10"></label>
        <a href="#" id="add-data" class="btn btn-primary" onclick="window.print()"><span class="glyphicon glyphicon-cloud-print"></span>CETAK</a>

    </div>
    <br>
           </div><!-- /.content-wrapper -->
 </div><!-- /.box -->

</div>
</div>
  --> <?php 
    $this->load->view('parts/footer');
     ?>
