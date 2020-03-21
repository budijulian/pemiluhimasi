<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url()?>assets/img/<?= $this->session->userdata('foto')?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $this->session->userdata('nama')?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url().'admin/'?>"><i class="fa fa-circle-o"></i>
                            Dashboard</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i> <span>Mahasiswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url().'admin/mahasiswa/'?>"><i
                                class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Kandidat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url().'admin/kandidat/'?>"><i
                                class="fa fa-circle-o"></i>Data Kandidat</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i> <span>Voting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url().'admin/voting/'?>"><i class="fa fa-circle-o"></i>
                            Pengumuman</a></li>
                </ul>
                 <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url().'admin/voting/data/'?>"><i class="fa fa-circle-o"></i>
                            Data Voting</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Waktu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url().'admin/waktu'?>"><i class="fa fa-circle-o"></i>
                            Waktu Pemilihan</a></li>
                </ul>
            </li>
            <!-- <li class="active treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Konten</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="
                    // echo base_url().'admin/konten'
                    <i class="fa fa-circle-o"></i>
                            Konten</a></li>
                </ul>
            </li> -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>