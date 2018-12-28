<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Rute </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Rute</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                             <button type="button" id="tambahdata" class="btn btn-labeled btn-secondary"><span class="btn-label"><i class="fa fs-user-plus"></i></span>Tambahkan Data</button> 
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                  
                                </div>
                            </div>

                            <div class="panel-body">
                              <div id="reload">
                               <table class="table table-bordered table-dataTable" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Rute ID</th>
                                            <th>Waktu Perjalanan</th>
                                            <th>Rute</th>
                                            <th>Harga</th>
                                            <th>Transportasi ID</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data">

                                    </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        <div class="modal modal-secondary fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Data Rute</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="insert_rute" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Waktu Pemberangkatan</label>
                                             <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" class="form-control time-picker" id="depart_at" name="depart_at">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Tiba</label>
                                             <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" class="form-control time-picker" id="depart_to" name="depart_to">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Rute Mulai - Akhir</label><br>
                                            <div class="input-group">

                                        <input type="text" class="form-control" name="rute_from" id="rute_from" placeholder="Rute Mulai" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"  data-toggle="modal" data-target="#ModalCariRuteKereta" id="btn_from">Cari</button>
                                        </span>
                                        
                                        <input type="text" class="form-control" name="rute_to" id="rute_to" placeholder="Rute Akhir" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"  data-toggle="modal" data-target="#ModalCariRuteKereta" id="btn_to">Cari</button>
                                        </span>
                                    </div>      <br>
                                   <!--  <select name="rute_tipe" class="form-control custom-Select" id="rute_tipe">
                                                <option value="k">Kereta</option>
                                                <option value="p">Pesewat</option>
                                               
                                            </select>    -->                               <!-- <input type="text" class="form-control validate[required]" name="rute_from" id="rute_from" placeholder="Rute Mulai" style="display: inline; width: 300px;" data-prompt-position="topLeft"> - 
                                            <input type="text" class="form-control validate[required]" name="rute_to" id="rute_to" placeholder="Rute Akhir" style="display: inline; width: 300px;" data-prompt-position="topLeft"> -->
                                        </div>

                                        
                                        <div class="form-group">
                                          <label>Harga</label>
                                        <div class="input-group">
                                        <span class="input-group-addon">Rp </span>
                                        <input type="text" style="width: 260px" class="form-control validate[required]" id="price" name="price" onkeypress="return hanyaAngka(event)">
                                        </div>
                                </div>

                                         <div class="form-group">
                                            <label>Transportasi</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="transportation_id" id="transportation_id" placeholder="Kode Transportasi" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#ModalCari">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="deskripsi_transportasi" id="deskripsi_transportasi" placeholder="Deskripsi Transportasi" data-prompt-position="topLeft" readonly>
                                        </div>
                                        
                                    </div>

                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn_simpan">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-secondary fade" id="ModalCariRuteKereta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cari Rute Kereta</h4>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Kereta </a></li>
                                    <li class=""><a href="#tab_1_2" data-toggle="tab" aria-expanded="true"> Pesawat</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab_1_1">
                                       <table class="table table-bordered table-dataTable" id="datatipe" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Abbr</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data_rute">
                         
                                    </tbody>
                                </table>
                                    </div>
                                    <div class="tab-pane fade " id="tab_1_2">
                                 <table class="table table-bordered table-dataTable" id="datatipe" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Abbr</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data_rute_pesawat">
                         
                                    </tbody>
                                </table>
                      
                                    </div>
                                </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-secondary fade" id="ModalCari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cari Kendaraan</h4>
                </div>
                <div class="modal-body">
                 <table class="table table-bordered table-dataTable" id="datatipe" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>Kode Transportasi</th>
                                            <th>Deskripsi</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                               foreach ($data_transportasi as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['transportation_id']."</td>";
                                 echo "<td>".$p['deskripsi']."</td>";
                                 echo "<td style='text-align:center'><input type = 'button'  value ='Pilih' class ='btn btn-primary  pilih-transportasi'></td>";
                                 echo "</tr>";
                              }
                                ?>
                         
                                    </tbody>
                                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Update Pegawai -->
     <div class="modal modal-secondary fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Data Rute</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" class="update_rute" id="formvalidationtooltip">
             <div class="form-body">
                                            
                                           <input type="hidden" class="form-control validate[required]" name="rute_id_edit" id="rute_id2" placeholder="ID Station" data-prompt-position="topLeft" readonly>
                                       
                                       <div class="form-group">
                                            <label>Waktu Pemberangkatan</label>
                                             <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" class="form-control time-picker" id="depart_at2" name="depart_at_edit">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Tiba</label>
                                             <div class="input-group bootstrap-timepicker timepicker">
                                        
                                        <input type="text" class="form-control time-picker" id="depart_to2" name="depart_to_edit">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Rute Mulai - Akhir</label><br>
                                           <div class="input-group">

                                        <input type="text" class="form-control" name="rute_from_edit" id="rute_from2" placeholder="Rute Mulai" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"  data-toggle="modal" data-target="#ModalCariRuteKereta" id="btn_from">Cari</button>
                                        </span>
                                        
                                        <input type="text" class="form-control" name="rute_to_edit" id="rute_to2" placeholder="Rute Akhir" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"  data-toggle="modal" data-target="#ModalCariRuteKereta" id="btn_to">Cari</button>
                                        </span>
                                    </div>   
                                        </div>

                                        
                                        <div class="form-group">
                                          <label>Harga</label>
                                        <div class="input-group">
                                        <span class="input-group-addon">Rp </span>
                                        <input type="text" style="width: 260px" class="form-control validate[required]" id="price2" name="price_edit" onkeypress="return hanyaAngka(event)">
                                        </div>
                                </div>

                                         <div class="form-group">
                                            <label>Transportasi</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="transportation_id_edit" id="transportation_id2" placeholder="Kode Transportasi" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" id="btn_cari">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="deskripsi_transportasi_edit" id="deskripsi_transportasi2" placeholder="Deskripsi Transportasi" data-prompt-position="topLeft" readonly>
                                        </div>
                                    </div>

                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="btn_update">Update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-secondary fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                </div>
                <div class="modal-body">
                 <input type="hidden" name="kode" id="textkode" value="">
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus rute ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    
  <?php 
$this->load->view('parts/footer');
        ?>

        <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
      $('#price').number(true,0);
            $(document).ready(function(){
              tampil_data_rute();
              tampil_data_stasiun();
              tampil_data_pesawat();
   


   //  $('#btn_from').on('click',function(){
   //      if ($("#rute_tipe").val() == 'k') {
   //          $('ModalCariRuteKereta').modal();
   //          tampil_data_stasiun();
   // }
   //  })
   
function tampil_data_rute(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datarute/data_rute',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].rute_id+'</td>'+
                                '<td>'+data[i].depart_at+' - '+data[i].depart_to+'</td>'+
                                '<td>'+data[i].rute_from+' - '+data[i].rute_to +'</td>'+
                                '<td>'+data[i].price+'</td>'+
                                '<td>'+data[i].transportation_id+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].rute_id+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].rute_id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        function tampil_data_pesawat(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datarute/data_pesawat_awal',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].bandara_id+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].city+'</td>'+
                                '<td>'+data[i].abbr+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-secondary btn-md choose-pesawat">Choose</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data_rute_pesawat').html(html);
                }
 
            });
        }
        function tampil_data_stasiun(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datarute/data_stasiun_awal',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].city+'</td>'+
                                '<td>'+data[i].abbr+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-secondary btn-md choose-stasiun">Choose</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data_rute').html(html);
                }
 
            });
        }
    //      $(".choose-stasiun").click(function(){
    //             var rute_from = $('#rute_from').val();
    //             $.ajax({
    //             type  : 'POST',
    //             url   : '<?php echo base_url()?>index.php/Datarute/get_Rutestasiun',
    //             async : false,
    //             dataType : 'json',
    //             data : {rute_from:rute_from},
    //             success : function(data){
    //                 var html = '';
    //                 var i;

    //                 for(i=0; i<data.length; i++){
    //                     html += '<tr>'+
    //                             '<td>'+data[i].id+'</td>'+
    //                             '<td>'+data[i].name+'</td>'+
    //                             '<td>'+data[i].city+'</td>'+
    //                             '<td>'+data[i].abbr+'</td>'+
    //                             '<br><a href="javascript:;" class="btn btn-secondary btn-md choose_stasiun_to">Choose</a>'+''+
    //                             '</td>'+
    //                             '</tr>';
    //                 }
    //                 $('#show_data_rute').html(html);
    //                 //  var d = new Date(reservation_date);
    //                 // var weekday = new Array(7);
    //                 // weekday[0] = "Sunday";
    //                 // weekday[1] = "Monday";
    //                 // weekday[2] = "Tuesday";
    //                 // weekday[3] = "Wednesday";
    //                 // weekday[4] = "Thursday";
    //                 // weekday[5] = "Friday";
    //                 // weekday[6] = "Saturday";

    //                 // var n = weekday[d.getDay()];
    //                 // $('#ketrute').html('Rute '+rute_from+' → '+rute_to);
    //                 // if (infant > 0) {
    //                 // $('#kettambah').html(n+', '+reservation_date+' &nbsp; &nbsp; '+adult+' Adult with '+infant_1+' Infant');
    //                 // $('#tanggal_pesan').val(reservation_date);
    //                 // }else{
    //                 // $('#kettambah').html(n+', '+reservation_date+' &nbsp; &nbsp; '+adult+' Adult');
    //                 // $('#tanggal_pesan').val(reservation_date);
    //                 // }
    //             }
 
    //         });

    // }); 
           //Simpan Barang
        // {NIP:NIP , NmPeg:NmPeg, AlmtPeg:AlmtPeg, TlpnPeg:TlpnPeg, TglLhrPeg:TglLhrPeg, JKPeg:JKPeg},
        $('#btn_simpan').on('click',function(){
            var depart_at=$('#depart_at').val();
            var depart_to=$('#depart_to').val();
            var rute_from=$('#rute_from').val();
            var rute_to = $('#rute_to').val();
            var price = $('#price').val();
            var transportation_id = $('#transportation_id').val();
            var datanya = $('.insert_rute').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datarute/simpan_rute')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                   
                    $('[name="rute_from"]').val("");
                    $('[name="rute_to"]').val("");
                    $('[name="price"]').val("");
                    $('[name="transportation_id"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_rute();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datarute/get_rute')?>",
                dataType : "JSON",
                data : {rute_id:id},
                success: function(data){
                    $.each(data,function(rute_id, depart_at,depart_to, rute_from, rute_to, price, transportation_id){
                        $('#ModalaEdit').modal('show');
                        $('[name="rute_id_edit"]').val(data.rute_id);
                        $('[name="depart_at_edit"]').val(data.depart_at);
                        $('[name="depart_to_edit"]').val(data.depart_to);
                        $('[name="rute_from_edit"]').val(data.rute_from);
                        $('[name="rute_to_edit"]').val(data.rute_to);
                        $('[name="price_edit"]').val(data.price);
                        $('[name="transportation_id_edit"]').val(data.transportation_id);
                    });
                }
            });
            return false;
        });
 
 
        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

         //Update Barang
        $('#btn_update').on('click',function(){
           var rute_id = $('#rute_id2').val();
            var depart_at = $('#depart_at2').val();
            var depart_to = $('#depart_to2').val();
            var rute_from = $('#rute_from2').val();
            var rute_to = $('#rute_to2').val();
            var price = $('#price2').val();
            var transportation_id = $('#transportation_id2').val();
            var datanyaa = $('.update_rute').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datarute/update_rute')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="rute_id_edit"]').val("");
                    $('[name="depart_at_edit"]').val("");
                    $('[name="depart_to_edit"]').val("");
                    $('[name="rute_from_edit"]').val("");
                    $('[name="rute_to_edit"]').val("");
                    $('[name="price_edit"]').val("");
                    $('[name="transportation_id_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_rute();
                }
            });
            return false;
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datarute/hapus_rute')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_rute();
                    }
                });
                return false;
            });
                  $('#combod select').change(function(){
        var selruteto = $(this).val();
        if ($('#combox select').val() == selruteto) {
            alert('Rute harus berbeda!');
        }
    });
                  $('#combox select').change(function(){
        var selrutefrom = $(this).val();
               if ($('#combod select').val() == selrutefrom) {
            alert('Rute harus berbeda!');

        }

    });

            $(function(){
 $(document).on('click','.pilih-transportasi',function(){
     var transportation_id = $(this).closest('tr').find('td:eq(0)').text();
     var deskripsi = $(this).closest('tr').find('td:eq(1)').text();
     $('#transportation_id').val(transportation_id);
     $('#transportation_id2').val(transportation_id);
     $('#deskripsi_transportasi').val(deskripsi);
     $('#deskripsi_transportasi2').val(deskripsi);
     $('#ModalCari').modal('hide');
 
$('#ModalaEdit').modal();
 $('#ModalCari').modal('hide');
    });
 $(document).on('click','#btn_cari',function(){
     
     $('#ModalCari').modal();
    $('#ModalaEdit').modal('hide');
    
    });
  $('#tambahdata').click(function(){
                  $('[name="depart_at"]').val("");
                    $('[name="depart_to"]').val("");
                    $('[name="rute_from"]').val("");
                    $('[name="rute_to"]').val("");
                    $('[name="price"]').val("");
                    $('[name="transportation_id"]').val("");
                    $('[name="deskripsi_transportasi"]').val("");
            $('#myModal8').modal();

                              
        })
  $(document).on('click','#btn_from',function(){
     
     $('#ModalCariRuteKereta').modal();
    $('#ModalaEdit').modal('hide');
    
    });
   $(document).on('click','#btn_to',function(){
     
     $('#ModalCariRuteKereta').modal();
    $('#ModalaEdit').modal('hide');
    
    });
 $(document).on('click','.choose-stasiun',function(){
     var id = $(this).closest('tr').find('td:eq(0)').text();
      var rute_from_value =  $('#rute_from').val();
     var rute_from_depan = rute_from_value.substring(0, 2);
     
     if ($('#rute_from').val() != '') {
        $('#rute_to').val(id);
     }
     if($('#rute_from').val() == ''){
     $('#rute_from').val(id);   
     }
     $('#ModalaEdit').modal();
     $('#ModalCariRuteKereta').modal('hide');
     
     if ($('#rute_from').val() == $('#rute_to').val()) {
        alert('Rute harus berbeda !');
        $('#rute_from').val('');
        $('#rute_to').val('');
     }
     if( rute_from_depan == 'BU' ){
     alert('Rute diharuskan dalam satu tipe kendaraan'); 
      $('#rute_from').val('');
        $('#rute_to').val('');
     }

    });
 $(document).on('click','.choose-pesawat',function(){
     var id = $(this).closest('tr').find('td:eq(0)').text();
     var rute_from_value =  $('#rute_from').val();
     var rute_from_depan = rute_from_value.substring(0, 2);
     if ($('#rute_from').val() != '') {
        $('#rute_to').val(id);
     }
     if($('#rute_from').val() == ''){
     $('#rute_from').val(id);   
     }
     $('#ModalaEdit').modal();
     $('#ModalCariRuteKereta').modal('hide');
     
     if ($('#rute_from').val() == $('#rute_to').val()) {
        alert('Rute harus berbeda !');
        $('#rute_from').val('');
        $('#rute_to').val('');
     }
      if( rute_from_depan == 'ST' ){
     alert('Rute diharuskan dalam satu tipe kendaraan'); 
      $('#rute_from').val('');
        $('#rute_to').val('');
     }

    });
 });
           });
  </script>