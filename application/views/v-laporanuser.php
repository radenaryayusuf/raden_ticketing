<?php 
$this->load->view('parts/header');
//$this->load->view('parts/navigation');
 ?>
<?php 
if($this->session->userdata('user')=='1'){
  $this->load->view('parts/navigation');
}elseif ($this->session->userdata('user')=='2'){
  $this->load->view('parts/navigation');
}
  ?> 

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Laporan Transportation</li>
      </ol>
    </div><!--/.row-->
    <div id="tabel_responsive">
     <table class="table table-bordered printableArea" id="laporan">
  <thead>


   <tr>
    <th>No.</th>
    <th>id</th>
    <th>username</th>
    <th>password</th>
    <th>full name</th>
    <th>level</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
  $query = $this->db->query("SELECT * FROM user");
 foreach ($query->result_array() as $data) {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$data['userid']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";
    echo "<td>".$data['fullname']."</td>";
    echo "<td>".$data['level']."</td>";
        echo "</tr>";
    $i++;
  }
  
  ?>  

  </tbody>
  

</table>
    </div>

    <div class="row mt">
      <label class="col-sm-10"></label>
        <a href="#" id="add-data" class="btn btn-primary" onclick="window.print()"><span class="glyphicon glyphicon-cloud-print"></span>CETAK</a>

    </div>
    <br>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


 <!-- 

</div>
</div>
  --> <?php 
    $this->load->view('parts/footer');
     ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#printButton").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });
});
</script>


    
    
   
   
    
         


