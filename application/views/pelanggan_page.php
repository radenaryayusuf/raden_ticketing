<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data Pelanggan</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data Pelanggan</li>
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
                                            <th>Kode Pelanggan</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Phone</th>
                      <th>Jenis Kelamin</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Pelanggan</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="insert_pelanggan" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control validate[required]" name="nama" id="nama" placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control validate[required]" name="alamat" id="alamat" placeholder="Alamat Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control validate[required]" name="nohp" id="nohp" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_laki" value="L" name="jeniskelamin" checked>
                                        <label for="inlineRadio1"> Laki-laki </label>
                                    </div>

                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_perempuan" value="P" name="jeniskelamin">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Pelanggan</h4>
                </div>
                <div class="modal-body">
                                        <form role="form" class="update_pelanggan" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Customer ID</label>
                                            <input type="text" class="form-control validate[required]" name="customer_id_edit" id="customer_id2" placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control validate[required]" name="nama_edit" id="nama2" placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control validate[required]" name="alamat_edit" id="alamat2" placeholder="Alamat Pelanggan" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control validate[required]" name="nohp_edit" id="nohp2" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_laki" value="L" name="jeniskelamin_edit" checked>
                                        <label for="inlineRadio1"> Laki-laki </label>
                                    </div>

                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_perempuan" value="P" name="jeniskelamin_edit">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus Pelanggan ini?</p></div>
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
              tampil_data_pelanggan();
   
        function tampil_data_pelanggan(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datapelanggan/data_pelanggan',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].customer_id+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].nohp+'</td>'+
                                '<td>'+data[i].jeniskelamin+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].customer_id+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].customer_id+'">Hapus</a>'+
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
            var nama = $('#nama').val();
            var alamat =$('#alamat').val();
            var nohp = $('#nohp').val();
            var jeniskelamin = $('input[name=jeniskelamin]:checked').val();
            var datanya = $('.insert_pelanggan').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datapelanggan/simpan_pelanggan')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="nohp"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_pelanggan();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datapelanggan/get_pelanggan')?>",
                dataType : "JSON",
                data : {customer_id:id},
                success: function(data){
                    $.each(data,function(customer_id, nama, alamat, nohp, jeniskelamin){
                        $('#ModalaEdit').modal();
                        $('[name="customer_id_edit"]').val(data.customer_id);
                        $('[name="nama_edit"]').val(data.nama);
                        $('[name="alamat_edit"]').val(data.alamat);
                        $('[name="nohp_edit"]').val(data.nohp);
                        $('[name="jeniskelamin_edit"]').val(data.jeniskelamin);
                        
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
           var customer_id=$('#customer_id2').val();
            var NmDok=$('#nama2').val();
            var AlmtDok=$('#alamat2').val();
            var TlpnDok = $('#nohp2').val();
            var TglLhrDok = $('#jeniskelamin2').val();
            var datanyaa = $('.update_pelanggan').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datapelanggan/update_pelanggan')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="customer_id_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="nohp_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_pelanggan();
                }
            });
            return false;
        });
  

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datapelanggan/hapus_pelanggan')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_pelanggan();
                    }
                });
                return false;
            });
           
           });
  </script>