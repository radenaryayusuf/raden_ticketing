
<?php 
$this->load->view('parts/header');
 ?>
       <?php 
$this->load->view('parts/navigation');
        ?>        

 <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1> Pemesanan Pesawat </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url()?>">Transaksi</a></li>
                    <li class="active"> Pemesanan Pesawat</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                <div class="row">

                     <div class="col-md-12">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">Flight's Reservation</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link expand" href="javascript:;"><i class="ti-fullscreen"></i></a>                                    
                                                                       
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-4">
                        <div class="panel panel-default shadow-one">
                            <div class="panel-heading">
                                <h3 class="panel-title">1. Flight Destination</h3>
                                
                            </div>
                            <div class="panel-body scroller" data-height="200px" >
                                <div class="form-group">
                                        <label>Select Origin</label>
                                        <div id="combox">
                                          
                                        <select class="form-control select2Search" name="rute_from" id="rute_from" required>
                                            <option>FROM</option>
                                            <?php 
                                   foreach ($qrutefrom as $rowrutefrom) {
                                       ?>
                                       <option id="rute_from1" name="rute_from1"  value="<?=$rowrutefrom->rute_from?>"><?php echo $rowrutefrom->city ?> (<?php echo $rowrutefrom->abbr ?>)</option>
                                       <?php
                                   }
                                    ?>
                                        </select>
                                        <input type="hidden" name="name_bandara1" id="name_bandara1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Destination</label>
                                        <div id="combod">
                                            
                                        <select class="form-control select2Search" name="rute_to" id="rute_to">
                                            <option>TO</option>
                                            <?php foreach($qruteto as $rowruteto){?>
           <option id="rute_to1" name="rute_to1" value="<?=$rowruteto->rute_to?>"><?=$rowruteto->city?> (<?php echo $rowruteto->abbr ?>)</option>
           <?php }?>
                                        </select>
                                        <input type="hidden" name="nama_bandara2" id="nama_bandara2">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default shadow-one">
                            <div class="panel-heading">
                                <h3 class="panel-title">2. Date of Travel</h3>
                                
                            </div>
                            <div class="panel-body scroller" data-height="200px" >
                            <div class="form-group">
                                    <label>Departure</label>
                                    <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" id="reservation_date" name="reservation_date">

                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default shadow-one">
                            <div class="panel-heading">
                                <h3 class="panel-title">3. Search Flight</h3>
                                
                            </div>
                            <div class="panel-body scroller" data-height="200px" >
                            <div class="form-group">
                                        <label>Adult</label>
                                        <div id="adult_combo">
                                        <select class="form-control select2" name="adult" id="adult">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                        </div>
                                    </div>
                            <div class="form-group">
                                        <label>Infant</label>
                                        <div id="infant_combo">
                                        <select class="form-control select2"  name="infant" id="infant">
                                           <option>0</option>
                                        </select>
                                        </div>
                                    </div>
 <div class="col-xs-13">
                                         <button type="submit" class="btn btn-labeled btn-md btn-secondary" id="search_button"><span class="btn-label"><i class="di di-search"></i></span>Search Ticket </button> 
                                         </div>

                                        </div>
                                       
                            </div>

                            </div>
                        
                        
<div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <h3 id="ketrute">Rute From → To</h3>
                                <p id="kettambah">Date How</p>
                                                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped" id="train_rute">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Depart</th>
                                            <th>Seat(s) Left</th>
                                            <th>Price per Person</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody id="show_rute">
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                            </div>
                        </div>
                    </div>
                    

                            </div>
                        </div>
                    </div>
               </div>
               
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
      
 <div class="modal modal-secondary fade" id="ModalConfir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Raden Ticketing</h4>
                </div>
                <form method="post" action="<?php echo site_url('reservation_plane/proses'); ?>" role="form">
                <div class="modal-body">
                  <div class="alert alert-info"><p>This is your current reservation details : 
                                    <input type="hidden" name="rute_id" id="rute_id">

                  </p>
                    <div class="col-md-12">
                        
                                <table class="table" border="0px ">
                                        
                                    <tbody>
                                        <input type="hidden" name="jumlahadult" id="jumlahadult">
                                        <input type="hidden" name="jumlahinfant" id="jumlahinfant">
                                        <input type="hidden" name="seat_qty" id="seat_qty">
                                        <input type="hidden" name="rute_id_bawa" id="rute_id_bawa">
                                        <input type="hidden" name="sum_of_price2" id="sum_of_price2">
                                        <input type="hidden" name="tanggal_pesan" id="tanggal_pesan">
                                        <input type="hidden" name="price_person" id="price_person">
                                        <input type="hidden" name="deskripsi_bawa" id="deskripsi_bawa">
                                        <input type="hidden" name="nama_stasiuna" id="nama_stasiun">
                                        <input type="hidden" name="nama_stasiunaa" id="nama_stasiun1">
                                        <tr>
                                            <td id="deskripsi_confir">Description </td>
                                            <td id="person1">Person</td>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 300px;">&nbsp;</td>
                                            <td id="price1">Price</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td id="person2">Person</td>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 300px;">&nbsp;</td>
                                            <td id="price2">Price</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td>You pay</td>
                                            <td style="width: 100px;">&nbsp;</td>
                                            <td style="width: 300px;">&nbsp;</td>
                                            <td id="sum_of_price">Price</td>
                                        </tr>
                                    </tbody>
                                </table>
                           
                    </div>
                    <p>Please confirm if your reservation details are correct.</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" name="submit" class="btn btn-secondary">Proses</button>
                </div>
                </form>
            </div>
        </div>
    </div>
  <?php 
$this->load->view('parts/footer');
        ?>

        <script>
    
            $(document).ready(function(){
              $("button").click(function(){
                var rute_from1 = $('#rute_from').attr('data');
                var rute_to1 = $('#rute_to').attr('data');
                var rute_from = $('#rute_from').val();
                var rute_to = $('#rute_to').val();
                var reservation_date = $('#reservation_date').val();
                var adult = $('#adult').val();
                var infant_1 = $('#infant').val();
                var infant = Number($('#infant').val());
                var name_stasiunI = $('#name_bandara1').val();
                var name_stasiunII = $('#nama_bandara2').val();
               
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>index.php/reservation_plane/data_kereta',
                async : false,
                dataType : 'json',
                data : {rute_from:rute_from , rute_to:rute_to},
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        
                        html += '<tr>'+
                                '<td>'+data[i].deskripsi+'</td>'+
                                '<td>'+data[i].depart_at+'</td>'+
                                '<td>'+data[i].seat_qty+'</td>'+
                                '<td style="text-align:left">'+'Rp ' +data[i].price+
                                '<br><a href="javascript:;" class="btn btn-secondary btn-md choose-rute" data="'+data[i].rute_id+'">Choose</a>'+''+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_rute').html(html);
                     var d = new Date(reservation_date);
                    var weekday = new Array(7);
                    weekday[0] = "Sunday";
                    weekday[1] = "Monday";
                    weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";
                    weekday[4] = "Thursday";
                    weekday[5] = "Friday";
                    weekday[6] = "Saturday";

                    var n = weekday[d.getDay()];
                    $('#ketrute').html('Rute '+name_stasiunI+' → '+name_stasiunII);
                    if (infant > 0) {
                    $('#kettambah').html(n+', '+reservation_date+' &nbsp; &nbsp; '+adult+' Adult with '+infant_1+'Infant');
                    $('#tanggal_pesan').val(reservation_date);
                    }else{
                    $('#kettambah').html(n+', '+reservation_date+' &nbsp; &nbsp; '+adult+' Adult');
                    $('#tanggal_pesan').val(reservation_date);
                    }
                    $('#nama_stasiun').val(name_stasiunI);
                    $('#nama_stasiun1').val(name_stasiunII);
                }
 
            });

    });
$('#show_rute').on('click','.choose-rute',function(){
    var id=$(this).attr('data');
    var deskripsi_pilih = $(this).closest('tr').find('td:eq(0)').text();
    var seat_qty = $(this).closest('tr').find('td:eq(2)').text();
    var price_person = $(this).closest('tr').find('td:eq(3)').text();
    var adult_amount = $('#adult').val();   
    var infant_amount = $('#infant').val();
 
    
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/reservation_plane/get_confirmation')?>",
                dataType : "JSON",
                data : {rute_id:id},
                success: function(data){
                    $.each(data,function(rute_id,price){
                        $('#ModalConfir').modal();
                        $('#deskripsi_confir').html(deskripsi_pilih);
                        $('#person1').html('Adult Fare (x '+adult_amount+')');
                        $('#jumlahadult').val(adult_amount);
                        $('#seat_qty').val(seat_qty);
                        $('#rute_id_bawa').val(data.rute_id);
                        $('#jumlahinfant').val(infant_amount);
                        $('#price1').html('Rp '+data.price * adult_amount);
                        $('#person2').html('Infant Fare (x '+infant_amount+')');
                        $('#price2').html('Rp '+data.price * adult_amount / 2);
                        var bilangan1 = data.price * adult_amount;
                        var bilangan2 = data.price * adult_amount / 2;
                        var jumlahan = bilangan1 + bilangan2;
                        $('#sum_of_price').html('Rp '+jumlahan);
                        $('#sum_of_price2').val(jumlahan);
                        $('#price_person').val(data.price);
                        $('#deskripsi_bawa').val(deskripsi_pilih);
                        
                    });
                }
            });
            return false;
    

});
                     $('#adult_combo select').change(function(){
        var adult_val = $(this).val();
        console.log(adult_val);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box

        if (adult_val == 1) {
            $('#infant_combo select')
            .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
        }else if(adult_val == 2){
             $('#infant_combo select')
             .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
            .append('<option value="2">2</option>')

        }else if(adult_val == 3){
             $('#infant_combo select')
             .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
            .append('<option value="2">2</option>')
            .append('<option value="3">3</option>')

        }else if(adult_val == 4){
             $('#infant_combo select')
             .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
            .append('<option value="2">2</option>')
            .append('<option value="3">3</option>')
            .append('<option value="4">4</option>')

        }
        else if(adult_val == 5){
             $('#infant_combo select')
             .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
            .append('<option value="2">2</option>')
            .append('<option value="3">3</option>')
            .append('<option value="4">4</option>')

        }
        else if(adult_val == 6){
             $('#infant_combo select')
             .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
            .append('<option value="2">2</option>')
            .append('<option value="3">3</option>')
            .append('<option value="4">4</option>')

        }
        else if(adult_val == 7){
             $('#infant_combo select')
             .find('option')
            .remove()
            .end()
            .append('<option value="0">0</option>')
            .append('<option value="1">1</option>')
            .append('<option value="2">2</option>')
            .append('<option value="3">3</option>')
            .append('<option value="4">4</option>')

        }
    });
                                $('#combox select').change(function(){
        var rute_from =$('#rute_from').val();
       var url = "<?php echo base_url()  ?>index.php/reservation_plane/get_namestasiun1/"+rute_from;
    $.get(url,function(e){
      $('#name_bandara1').val(e);
    }) 
    });
                    $('#combod select').change(function(){
        var rute_to = $('#rute_to').val();
        var url = "<?php echo base_url()  ?>index.php/reservation_plane/get_namestasiun2/"+rute_to;
    $.get(url,function(e){
      $('#nama_bandara2').val(e);
    })
     
    });
           });
  </script>