<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Cetak Barang</title>

  <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-extend.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.css">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/weather-icons/weather-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dashboard/v1.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    @media (max-width: 480px) {
      .panel-actions .dataTables_length {
        display: none;
      }
    }
    
    @media (max-width: 320px) {
      .panel-actions .dataTables_filter {
        display: none;
      }
    }
    
    @media (max-width: 767px) {
      .dataTables_length {
        float: left;
      }
    }
    
    #exampleTableAddToolbar {
      padding-left: 30px;
    }
  </style>
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
      <center><h2>Laporan Barang Kondisi Baik</h2></center>
        <div class="panel-body">
         <table class="table table-hover dataTable table-striped width-full" >
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Kode Jenis Barang</th>
                <th>Nama Barang</th>
                <th>Tanggal Barang Diterima</th>
              </tr>
            </thead>
             <tbody>
             <?php 
              $i = 1;
               foreach ($data_barang as $b) {
                 echo "<tr>";
                 echo "<td>".$i."</td>";
                 echo "<td>".$b['br_kode']."</td>";
                 echo "<td>".$b['jns_brg_kode']."</td>";
                 echo "<td>".$b['br_nama']."</td>";
                 echo "<td>".$b['br_tgl_terima']."</td>";
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
</div>
  <!-- Core  -->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/intro-js/intro.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url() ?>assets/js/core.js"></script>
  <script src="<?php echo base_url() ?>assets/js/site.js"></script>

  <script src="<?php echo base_url() ?>assets/js/sections/menu.js"></script>
  <script src="<?php echo base_url() ?>assets/js/sections/menubar.js"></script>
  <script src="<?php echo base_url() ?>assets/js/sections/sidebar.js"></script>

  <script src="<?php echo base_url() ?>assets/js/configs/config-colors.js"></script>
  <script src="<?php echo base_url() ?>assets/js/configs/config-tour.js"></script>

  <script src="<?php echo base_url() ?>assets/js/components/asscrollable.js"></script>
  <script src="<?php echo base_url() ?>assets/js/components/animsition.js"></script>
  <script src="<?php echo base_url() ?>assets/js/components/slidepanel.js"></script>
  <script src="<?php echo base_url() ?>assets/js/components/switchery.js"></script>
  <script src="<?php echo base_url() ?>assets/js/components/datatables.js"></script>
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