 <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <div class="sidenav-inner">
                
                <ul class="side-nav magic-nav">
                    
                    <li class="side-nav-header">Navigation</li>
                    
                    <li>
                        <a href="<?php echo base_url()?>"><i class="sli-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    
                    
                    <li class="has-submenu">
                        <a href="#submenuMaster" data-toggle="collapse" aria-expanded="false">
                            <i class="sli-docs"></i> 
                            <span class="nav-text">Master Data</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuMaster">
                            <ul>
                                <li><?php echo anchor('datauser','Data User') ?></li>
                                <li><?php echo anchor('datapelanggan','Data Pelanggan') ?></li>
                                <li><?php echo anchor('datatransportasitipe','Tipe Transportasi') ?></li>
                                <li><?php echo anchor('datatransportasi','Data Transportasi') ?></li>
                                <li><?php echo anchor('datarute','Rute') ?></li>
                                <li><?php echo anchor('datastasiun','Station') ?></li>
                                <li><?php echo anchor('databandara','Bandara') ?></li>
                              
                            </ul>
                        </div>
                    </li>
          <!--
          <li>
                        <a href="<?php echo base_url(); ?>index.php/kehadiran/">
              <i class="di di-desktop"></i> <span class="nav-text">Kehadiran</span>
            </a>
                    </li>
                    -->
          
          <li class="has-submenu">
                        <a href="#submenuAbsen" data-toggle="collapse" aria-expanded="false">
                            <i class="di di-desktop"></i> 
                            <span class="nav-text">Transaksi</span>
                        </a>
                         <div class="sub-menu collapse secondary" id="submenuAbsen">
                            <ul>
                                <li><?php echo anchor('reservation_train','Kereta') ?></li>
                                <li><?php echo anchor('reservation_plane','Pesawat') ?></li>

                            </ul>
                        </div>
                    </li>
          
          
          <li class="has-submenu">
                        <a href="#submenuLaporan" data-toggle="collapse" aria-expanded="false">
                            <i class="di di-admin-tools"></i> 
                            <span class="nav-text">Laporan</span>
                        </a>
                        <div class="sub-menu collapse secondary" id="submenuLaporan">
                            <ul>
                              
                                <li><?php echo anchor('laporanmaster','Laporan Master') ?></li>
                            </ul>
                            <ul>
                              
                                <li><?php echo anchor('laporanjadwal','Laporan Jadwal Kereta') ?></li>
                            </ul>
                            <ul>
                              
                                <li><?php echo anchor('laporanjadwalpesawat','Laporan Jadwal Pesawat') ?></li>
                            </ul>
                            <ul>
                              
                                <li><?php echo anchor('laporanpendapatan','Laporan Pendapatan') ?></li>
                            </ul>
                        </div>
                    </li>
          
                </ul>
                
            </div><!-- END: sidebar-inner -->
            
        </aside>    <!-- END: Side Navigation -->
