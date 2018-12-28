<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Station </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Station</li>
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
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Singkatan</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Station</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="insert_station" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>ID</label>
                                           <input type="text" class="form-control validate[required]" name="id" id="id" placeholder="ID Station" data-prompt-position="topLeft" readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control validate[required]" name="name" id="name" placeholder="Name" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control validate[required]" name="city" id="city" placeholder="City" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Abbr</label>
                                            <input type="text" class="form-control validate[required]" name="abbr" id="abbr" placeholder="Abbr" data-prompt-position="topLeft">
                                        </div>
                                        
                                    </div>

                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn_simpan1">Save</button>
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
                    <h4 class="modal-title" id="myModalLabel">Form Edit Station</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" class="update_station" id="formvalidationtooltip">
             <div class="form-body">

                                        <div class="form-group">
                                            <label>ID</label>
                                           <input type="text" class="form-control validate[required]" name="id_edit" id="id2" placeholder="ID Station" data-prompt-position="topLeft" readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control validate[required]" name="name_edit" id="name2" placeholder="Name" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control validate[required]" name="city_edit" id="city2" placeholder="City" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Abbr</label>
                                            <input type="text" class="form-control validate[required]" name="abbr_edit" id="abbr2" placeholder="Abbr" data-prompt-position="topLeft" readonly>
                                        </div>
                                        
                                    </div>

                                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="btn_update1">Update</button>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus station ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-secondary fade" id="ModalConfirInsert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Tambah</h4>
                </div>
                <div class="modal-body">
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menambahkan station ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn_simpan">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-secondary fade" id="ModalConfirUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Update</h4>
                </div>
                <div class="modal-body">
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau mengupdate station ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="btn_update">Update</button>
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
              tampil_data_station();
   
function tampil_data_station(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datastasiun/data_stasiun',
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
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].id+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].id+'">Hapus</a>'+
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
            var id=$('#id').val();
            var name=$('#name').val();
            var city = $('#city').val();
            var abbr = $('#abbr').val();
            var datanya = $('.insert_station').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datastasiun/simpan_stasiun')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="id"]').val("");
                    $('[name="name"]').val("");
                    $('[name="city"]').val("");
                    $('[name="abbr"]').val("");
                    $('#myModal8').modal('hide');
                    $('#ModalConfirInsert').modal('hide');
                    tampil_data_station();
                }
            });
            return false;
        });
         $('#btn_simpan1').on('click',function(){
            $('#ModalConfirInsert').modal();
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datastasiun/get_stasiun')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id, name, city, abbr){
                        $('#ModalaEdit').modal();
                        $('[name="id_edit"]').val(data.id);
                        $('[name="name_edit"]').val(data.name);
                        $('[name="city_edit"]').val(data.city);
                        $('[name="abbr_edit"]').val(data.abbr);
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
           var id = $('#id2').val();
            var name = $('#name2').val();
            var city = $('#city2').val();
            var abbr = $('#abbr2').val();
            var datanyaa = $('.update_station').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datastasiun/update_stasiun')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="name_edit"]').val("");
                    $('[name="city_edit"]').val("");
                    $('[name="abbr_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    $('#ModalConfirUpdate').modal('hide');
                    tampil_data_station();
                }
            });
            return false;
        });
        $('#btn_update1').on('click',function(){
          $('#ModalConfirUpdate').modal();
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datastasiun/hapus_stasiun')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_station();
                    }
                });
                return false;
            });
        $('#abbr').keyup(function(){
    var abbr = $('#abbr').val();
    var url = "<?php echo base_url()  ?>index.php/Datastasiun/kodeStasiun/"+abbr;
    $.get(url,function(e){
      $('#id').val(e);
    })
  });
 //            $(function(){
 // $(document).on('click','.pilih-transportasi',function(){
 //     var transportation_id = $(this).closest('tr').find('td:eq(0)').text();
 //     var deskripsi = $(this).closest('tr').find('td:eq(1)').text();
 //     $('#transportation_id').val(transportation_id);
 //     $('#transportation_id2').val(transportation_id);
 //     $('#deskripsi_transportasi').val(deskripsi);
 //     $('#deskripsi_transportasi2').val(deskripsi);
 //     $('#ModalCari').modal('hide');
 

 //    });
 // });
           });
  </script>