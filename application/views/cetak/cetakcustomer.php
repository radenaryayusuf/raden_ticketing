<?php 
$this->load->view('parts/header');
 ?>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  
  <script src="<?php echo base_url() ?>assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
  </head>
  <body onload="cetak()">
  <div class="page animsition">
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="printableArea">
      <center><h3>Laporan Data Customer</h3></center>
        <div class="panel-body">
         <table class="table table-hover dataTable table-striped width-full" >
            <thead>
              <tr>
                <th>No</th>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Gender</th>
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
      </div>
      </div>
      <!-- End Panel Basic -->
</div>
<?php 
$this->load->view('parts/footer');
 ?>
  <script src="<?php echo base_url() ?>assets/assets/js/jquery.PrintArea.js"></script>
 <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });
    })(document, window, jQuery);
     function cetak(){
      window.print();
    }

    
  </script>
</body>

</html>