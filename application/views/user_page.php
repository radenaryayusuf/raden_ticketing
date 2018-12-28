<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Data User </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Master Data</a></li>
                    <li class="active">Data User</li>
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
                                            <th>User ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data User</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="insert_user" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control validate[required]" name="username" id="username" placeholder="Username" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type = "password" name = "password" id = "password" class = "form-control validate[required,minSize[6],maxSize[50]]" data-prompt-position="topLeft" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type = "password" name = "confirm_password" id = "confirm_password" class = "form-control validate[required,equals[txtPassword]]" data-prompt-position="topLeft" placeholder="Confirm Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control validate[required]" name="fullname" id="fullname" placeholder="Nama Lengkap" data-prompt-position="topLeft">
                                        </div>
                                         <div class="form-group">
                                            <label>Level</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_admin" value="0" name="level" checked>
                                        <label for="inlineRadio1"> Admin </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_op" value="1" name="level">
                                        <label for="inlineRadio2"> Operator </label>
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
                    <h4 class="modal-title" id="myModalLabel">Form Data Pasien</h4>
                </div>
                <div class="modal-body">
                    <form action="#" role="form" id="update_user">
                                   <div class="form-body">

                                <div class="form-group">
                                            <label>UserID</label>
                                            <input type="text" class="form-control validate[required]" name="userid_edit" id="userid2" placeholder="UserID" data-prompt-position="topLeft">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control validate[required]" name="username_edit" id="username2" placeholder="Username" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type = "password" name = "password_edit" id = "password2" class = "form-control validate[required,minSize[6],maxSize[50]]" data-prompt-position="topLeft" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type = "password" name = "txtCPassword" id = "txtCPassword" class = "form-control validate[required,equals[txtPassword]]" data-prompt-position="topLeft" placeholder="Confirm Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control validate[required]" name="fullname_edit" id="fullname2" placeholder="Nama Lengkap" data-prompt-position="topLeft">
                                        </div>
                                         <div class="form-group">
                                            <label>Level</label><br>
                                        <div class="radio radio-inline">
                                        <input type="radio" id="rd_admin2" value="0" name="level_edit" checked>
                                        <label for="inlineRadio1"> Admin </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="rd_op2" value="1" name="level_edit">
                                        <label for="inlineRadio2"> Operator </label>
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
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus User ini?</p></div>
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
              tampil_data_user();
   
function tampil_data_user(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Datauser/data_user',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var N = 1;

                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].userid+'</td>'+
                                '<td>'+data[i].fullname+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].password+'</td>'+
                                '<td>'+data[i].level+'</td>'+
                                '<td style="text-align:center">'+
                                    '<a href="javascript:;" class="btn btn-info btn-md item_edit" data="'+data[i].userid+'">Edit</a>'+' | '+
                                    '<a href="javascript:;" class="btn btn-danger btn-md item_hapus" data="'+data[i].userid+'">Hapus</a>'+
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
            var username=$('#nopasien').val();
            var password=$('#nama_pasien').val();
            var fullname=$('#alamat').val();
            var level = $('input[name=level]:checked').val();
            var datanya = $('.insert_user').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datauser/simpan_user')?>",
                dataType : "JSON",
                data : datanya,
                success: function(data){
                    $('[name="username"]').val("");
                    $('[name="confirm_password"]').val("");
                    $('[name="password"]').val("");
                    $('[name="fullname"]').val("");
                    $('#myModal8').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
         //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Datauser/get_user')?>",
                dataType : "JSON",
                data : {userid:id},
                success: function(data){
                    $.each(data,function(userid,username, password, fullname, level){
                        $('#ModalaEdit').modal();
                        $('[name="userid_edit"]').val(data.userid);
                        $('[name="username_edit"]').val(data.username);
                        $('[name="password_edit"]').val('');
                        $('[name="fullname_edit"]').val(data.fullname);
                        $('[name="level_edit"]').val(data.level);
                        
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
           var userid =$('#userid22').val();
           var username =$('#username2').val();
            var password =$('#password2').val();
            var fullname=$('#fullname2').val();
            var level = $('input[name=level_edit]:checked').val();
            var datanyaa = $('#update_user').serializeArray();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Datauser/update_user')?>",
                dataType : "JSON",
                data : datanyaa,
                success: function(data){
                    $('[name="userid_edit"]').val("");
                    $('[name="username_edit"]').val("");
                    $('[name="password_edit"]').val("");
                    $('[name="fullname_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/Datauser/hapus_user')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_user();
                    }
                });
                return false;
            });
           });
  </script>