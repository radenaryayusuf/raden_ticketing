<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Tipe Transportasi </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Tipe Transportasi</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                             <button type="button" class="btn btn-labeled btn-secondary" data-toggle="modal" data-target="#myModal8"><span class="btn-label"><i class="fa fs-user-plus"></i></span>Tambahkan Data</button> 
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
                                            <th>ID Tipe</th>
                                            <th>Deskripsi</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Tipe</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="insert_tipe" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control validate[required]" name="description" id="description" placeholder="Deskripsi" data-prompt-position="topLeft"></textarea>
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
    <!-- Modal Update Pasien -->
     <div class="modal modal-secondary fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Data Tipe</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" id="update_tipe">
                                    <div class="form-body">
                                    
                                         
                                            <input type="hidden" class="form-control validate[required]" name="transportation_type_id_edit" id="transportation_type_id2" placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                              


                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control validate[required]" name="description_edit" id="description2" placeholder="Deskripsi" data-prompt-position="topLeft"></textarea>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Tipe ini?</p></div>
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
              $('#harga_jual').number(true,0);
            $(document).ready(function(){
              tampil_data_tipe();

   
function tampil_data_tipe(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/datatransportasitipe/data_tipe',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].transportation_type_id+'</td>'+
                                '<td>'+data[i].description+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].transportation_type_id+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].transportation_type_id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        //Simpan Barang
        // {NoPasien:NoPasien , NmPas:NmPas, AlmtPas:AlmtPas, TlpnPas:TlpnPas, TglLhrPas:TglLhrPas, JKPas:JKPas},
        $('#btn_simpan').on('click',function(){
            var description=$('#description').val();
            var datanya = $('.insert_tipe').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('datatransportasitipe/simpan_tipe')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="description"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_tipe();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/datatransportasitipe/get_tipe')?>",
                dataType : "JSON",
                data : {transportation_type_id:id},
                success: function(data){
                    $.each(data,function(transportation_type_id, description){
                        $('#ModalaEdit').modal();
                        $('[name="transportation_type_id_edit"]').val(data.transportation_type_id);
                        $('[name="description_edit"]').val(data.description);
                        
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
           var transportation_type_id=$('#transportation_type_id2').val();
            var description=$('#description2').val();
            var datanyaa = $('#update_tipe').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('datatransportasitipe/update_tipe')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="description_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_tipe();
                }
            });
            return false;
        });
  
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/datatransportasitipe/hapus_tipe')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_tipe();
                    }
                });
                return false;
            });
         
           });
  </script>