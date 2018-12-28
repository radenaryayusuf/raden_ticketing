<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Transportasi </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Transportasi</li>
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
                                            <th>Transportasi ID</th>
                                            <th>Kode</th>
                                            <th>Deskripsi</th>
                                            <th>Jumlah Kursi</th>
                                            <th>Tipe Deskripsi</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="insert_transportasi" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" class="form-control validate[required]" name="code" id="code" placeholder="Kode" style="width: 200px;" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                             <textarea class="form-control validate[required]" name="deskripsi" id="deskripsi" placeholder="Deskripsi" data-prompt-position="topLeft"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Tempat Duduk</label>
                                             <input type="number" style="width:200px" class="form-control validate[required]" name="seat_qty" id="seat_qty" placeholder="Jumlah" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                         <div class="form-group">
                                            <label>Tipe Kendaraan</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="transportation_type_id" id="transportation_type_id" placeholder="Kode Tipe" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" id="caritransportasi">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="description_tipe" id="description_tipe" placeholder="Deskripsi Tipe" data-prompt-position="topLeft" readonly>
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
    <div class="modal modal-secondary fade" id="ModalCari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cari Tipe Kendaraan</h4>
                </div>
                <div class="modal-body">
                 <table class="table table-bordered table-dataTable" id="datatipe" border="1" width="870px">
                                    <thead>
                                        <tr>
                                            <th>Kode Tipe</th>
                                            <th>Deskripsi</th>
                                            <th>Commands</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                               foreach ($data_tipe as $p) {
                                 echo "<tr>";
                                 echo "<td>".$p['transportation_type_id']."</td>";
                                 echo "<td>".$p['description']."</td>";
                                 echo "<td style='text-align:center'><input type = 'button'  value ='Pilih' class ='btn btn-primary  pilih-tipe'></td>";
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" class="update_transportasi" id="formvalidationtooltip">
             <div class="form-body">

                                        <div class="form-group">
                                            <label>Transportasi ID</label>
                                            <input type="text" class="form-control validate[required]" name="transportation_id_edit" id="transportation_id2" placeholder="Kode" style="width: 200px;" data-prompt-position="topLeft" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" class="form-control validate[required]" name="code_edit" id="code2" placeholder="Kode" style="width: 200px;" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                             <textarea class="form-control validate[required]" name="deskripsi_edit" id="deskripsi2" placeholder="Deskripsi" data-prompt-position="topLeft"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Tempat Duduk</label>
                                             <input type="number" style="width:200px" class="form-control validate[required]" name="seat_qty_edit" id="seat_qty2" placeholder="Jumlah" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                         <div class="form-group">
                                            <label>Tipe Kendaraan</label>
                                        </div>
                                   <div class="input-group">

                                        <input type="text" class="form-control" name="transportation_type_id_edit" id="transportation_type_id2" placeholder="Kode Tipe" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button" id="caritransportasi2">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
<br>
                                        <div class="form-group">
                                            <input type="text" class="form-control validate[required]" name="description_tipe" id="description_tipe2" placeholder="Deskripsi Tipe" data-prompt-position="topLeft" readonly>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus transportasi ini?</p></div>
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
            $(document).ready(function(){
              tampil_data_transportasi();
   
function tampil_data_transportasi(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datatransportasi/data_transportasi',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].transportation_id+'</td>'+
                                '<td>'+data[i].code+'</td>'+
                                '<td>'+data[i].deskripsi+'</td>'+
                                '<td>'+data[i].seat_qty+'</td>'+
                                '<td>'+data[i].description+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].transportation_id+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].transportation_id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        //Simpan Barang
        // {NIP:NIP , NmPeg:NmPeg, AlmtPeg:AlmtPeg, TlpnPeg:TlpnPeg, TglLhrPeg:TglLhrPeg, JKPeg:JKPeg},
        $('#btn_simpan').on('click',function(){
            var code=$('#code').val();
            var deskripsi=$('#deskripsi').val();
            var seat_qty = $('#seat_qty').val();
            var transportation_type_id = $('#transportation_type_id').val();
            var datanya = $('.insert_transportasi').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datatransportasi/simpan_transportasi')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="code"]').val("");
                    $('[name="deskripsi"]').val("");
                    $('[name="seat_qty"]').val("");
                    $('[name="transportation_type_id"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_transportasi();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datatransportasi/get_transportasi')?>",
                dataType : "JSON",
                data : {transportation_id:id},
                success: function(data){
                    $.each(data,function(transportation_id, code, deskripsi, seat_qty, transportation_type_id){
                        $('#ModalaEdit').modal();
                        $('[name="transportation_id_edit"]').val(data.transportation_id);
                        $('[name="code_edit"]').val(data.code);
                        $('[name="deskripsi_edit"]').val(data.deskripsi);
                        $('[name="seat_qty_edit"]').val(data.seat_qty);
                        $('[name="transportation_type_id_edit"]').val(data.transportation_type_id);
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
           var transportation_id=$('#transportation_id2').val();
            var code=$('#code2').val();
            var deskripsi=$('#deskripsi2').val();
            var seat_qty = $('#seat_qty2').val();
            var transportation_type_id = $('#transportation_type_id2').val();
            var datanyaa = $('.update_transportasi').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datatransportasi/update_transportasi')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="transportation_id_edit"]').val("");
                    $('[name="code_edit"]').val("");
                    $('[name="deskripsi_edit"]').val("");
                    $('[name="seat_qty_edit"]').val("");
                    $('[name="transportation_type_id_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_transportasi();
                }
            });
            return false;
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datatransportasi/hapus_transportasi')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_transportasi();
                    }
                });
                return false;
            });
        $('#caritransportasi').click(function(){
            $('#ModalCari').modal();
        })
         $('#tambahdata').click(function(){
                    $('[name="code"]').val("");
                    $('[name="deskripsi"]').val("");
                    $('[name="seat_qty"]').val("");
                    $('[name="transportation_type_id"]').val("");
            $('[name="description_tipe"]').val("");
            $('#myModal8').modal();

                              
        })
         
        $('#caritransportasi2').click(function(){
            $('#ModalCari').modal();
            $('#ModalaEdit').modal('hide');
        })
            $(function(){
 $(document).on('click','.pilih-tipe',function(){
     var transportation_type_id = $(this).closest('tr').find('td:eq(0)').text();
     var description = $(this).closest('tr').find('td:eq(1)').text();
     $('#transportation_type_id').val(transportation_type_id);
     $('#transportation_type_id2').val(transportation_type_id);
     $('#description_tipe').val(description);
     $('#description_tipe2').val(description);
     $('#ModalaEdit').modal();
     $('#ModalCari').modal('hide');
 

    });
 });
           });
  </script>