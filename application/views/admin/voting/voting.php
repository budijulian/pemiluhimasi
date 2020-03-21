<?php foreach($status as $b)?>
<?php foreach($status2 as $c)?>
<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Voting
                    <small>Suara</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Voting</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Mahasiswa</span>
                                <span class="info-box-number"><?= $b->total_mhs?><small> Orang</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Suara Masuk</span>
                                <span class="info-box-number"><?= $b->total_vote?><small> Suara</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Suara Tidak Sah</span>
                                <span class="info-box-number"><?= $c->total_tidaksah?><small> Suara</small></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <div class="box text-center">
                    <div class="box-title">
                        <h1 class="text-primary"><strong>Data Voting Mahasiswa </strong></h1>
                    </div>
                    <div class="box-body">
                        <table id="datavoting" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu</th>
                                    <th>Nama</th>
                                    <th>Pilihan</th>
                                    <th>Periode</th>
                                    <th>Suara</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <?php $no=1; foreach($data_vote as $row){ ?>
                                <tr>
                                    <!-- $u-> nama : nama dari column didalam database -->
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row->waktu ?></td>
                                    <td><?php echo $row->nama ?></td>
                                    <td><?php echo $row->pilihan ?></td>
                                    <td><?php echo $row->periode ?></td>
                                    <!-- mengirim link dengan memasukan value di url -->
                                    <td>
                                    <?php $status2 = $row->ket?>
                                    <form action="<?= base_url().'admin/voting/data/'.$row->npm_mhs ?>" method="post">
                                        <select name="suara" class="form-control">
                                            <option <?php if($status2=='Sah') {echo "selected"; } ?> value="Sah">
                                                Sah</option>
                                            <option <?php if($status2=='Tidak Sah') {echo "selected"; } ?> value="Tidak Sah">Tidak Sah
                                            </option>
                                        </select>
                                        <input href="<?= base_url().'admin/voting/data/'.$row->npm_mhs ?>" type="submit" name="submit" class="btn btn-info" value="Submit">
                                     </form>
                                    </td>
                                </tr>
                                <?php }  ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu</th>
                                    <th>Nama</th>
                                    <th>Pilihan</th>
                                    <th>Periode</th>
                                    <th>Suara</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-header -->
                    
                </div>
        </section>
    </div>
   </div>
</div>