<?php 
$this->load->view('parts/header');
 ?>
 <script src="<?php echo base_url()?>assets/Chart/Chart.bundle.js"></script>
 <script src="<?php echo base_url()?>assets/Chart/samples/utils.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
        <?php 
        foreach ($report as $rp) {
              $reservation_date[] = $rp->reservation_date;
            $price[] = (float) $rp->price;
        }
         ?>
         <?php 
        foreach ($report1 as $rp1) {
              $reservation_date1[] = $rp1->tahun_minggu;
            $price1[] = (float) $rp1->price;
        }
         ?>
         <?php 
        foreach ($report2 as $rp2) {
              $reservation_date2[] = $rp2->tahun_bulan;
            $price2[] = (float) $rp2->jumlah_bulanan;
        }
         ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Dashboard <small>Welcome back <span class="text-primary"><?php echo $this->session->userdata('nama');?></span></small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            
            <div class="content-wrap">  
                 <div class="row"><!--START: Content Wrap-->
                 <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pendapatan Harian</h3>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix">
                                     <canvas id="myChart" width="100" height="40"></canvas> 
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pendapatan Bulanan</h3>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix">
                                     <canvas id="myChart1" width="100" height="40"></canvas> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pendapatan Mingguan</h3>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix">
                                     <canvas id="myChart2" width="100" height="40"></canvas> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            

            </div>  <!--END: Content Wrap-->
              <!-- END: Main Container -->
        
       <?php 
$this->load->view('parts/footer');
        ?>
         <script>
            var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($reservation_date);?>,
        datasets: [{
            label: 'Price',
            data: <?php echo json_encode($price);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: <?php echo json_encode($price1);?>,
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: <?php echo json_encode($reservation_date1);?>
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("myChart2").getContext("2d");
        window.myPie = new Chart(ctx, config);
    };

    

            var ctx = document.getElementById("myChart1").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($reservation_date2);?>,
        datasets: [{
            label: 'Price',
            data: <?php echo json_encode($price2);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

        </script>