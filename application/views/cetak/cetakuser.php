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
      <center><h2>Laporan User</h2></center>
        <div class="panel-body">
         <table class="table table-hover dataTable table-striped width-full" >
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
                 echo "<td>".$u['fullname']."</td>";
                 echo "<td>".$u['level']."</td>";
                 echo "</tr>";
              $i++;
                }
                ?>
            </tbody>
          </table>
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