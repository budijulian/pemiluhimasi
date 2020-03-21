<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Mahasiswa
                    <small>Profile</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Mahasiswa</li>
                </ol>
            </section>
            <section class="content">
                <!-- menepatkan session pesan dari controler -->
                <?= "<div".$this->session->flashdata('message1')."</div>";?>
              
                <?= "<div".$this->session->flashdata('message')."</div>";?>
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahdata" type=""><i
                        class="fa fa-plus"></i>TAMBAH</button>
                 <!-- <button class="btn btn-danger" data-toggle="modal" data-target="#excel" type=""><i
                        class="fa fa-save"></i>EXCEL</button> -->
                <a class="btn btn-info" href="<?php echo base_url()?>admin/mahasiswa/print/" type="buttton"><i
                        class="fa fa-print"></i>Print</a> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="datamahasiswa" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Registrasi</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Jalur</th>
                                    <th>Ket</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                // variabel array mahasiswa menyimpan data dari database
                                foreach($mahasiswa as $u){?>
                                <tr>
                                    <!-- $u-> nama : nama dari column didalam database -->
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->timestamp ?></td>
                                    <td><?php echo $u->npm_mhs ?></td>
                                    <td><?php echo $u->nama ?></td>
                                    <td><?php echo $u->jurusan ?></td>
                                    <td><?php echo $u->fakultas ?></td>
                                    <td><?php echo $u->jalur ?></td>
                                    <td><?php echo $u->ket ?></td>
                                    <!-- mengirim link dengan memasukan value di url -->
                                    <td><a onclick="javascript:return confirm('Anda Yakin Menghapus Data dengan Npm :<?php echo $u->npm_mhs?>?')"
                                            href="<?php echo base_url().'admin/mahasiswa/hapus/'.$u->npm_mhs ?>">
                                            <div class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </div>
                                        </a>
                                        <a href="<?php echo base_url().'admin/mahasiswa/edit/'.$u->npm_mhs ?>">
                                            <div class="btn btn-info">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                        </a>
                                        <!-- <a href="
                                        
                                        // echo base_url().'admin/mahasiswa/email/'.$u->npm_mhs -->
                                         
                                            <!-- <div class="btn btn-info">
                                                <i class="fa fa-envelope"></i>
                                            </div>  -->
                                        </a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Jalur</th>
                                    <th>Ket</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
            </section>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!-- Modal tambah -->
<div class=" modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <?= form_open_multipart('admin/mahasiswa/tambah/') ?>
                    <div class="form-group">
                        <label for="">NPM</label>
                        <input type="text" name="npm" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" required value="">
                    </div>
                     <div class="form-group">
                     <label for="">Jalur</label>
                     <br>
                    <input type="radio" name="jalur"  id="" value="Reguler">Reguler
                    <input type="radio" name="jalur"  id="" value="Karyawan">Karyawan
                    </div>
                    <div class="form-group">
                        <label for="">Angkatan</label>
                       <select class="form-control" name="angkatan" id="">
                            <?php for ($i=2000; $i <= 2025; $i++) { ?>
                            <option  value="<?= $i?>"><?= $i?></option> 
                            <?php }?>
                        </select>
                    </div>
                      <div class="form-group">
                                 <label for="">TGL Lahir</label>
                                 <input type="date" name="tgl_lahir" class="form-control"
                                     value="<">
                    </div>
                    <div class="form-group">
                                 <label for="">Jurusan</label>
                                 <input type="text" name="jurusan" class="form-control"
                                     value="">
                    </div>
                    <div class="form-group">
                                 <label for="">Fakultas</label>
                                <input type="text" name="fakultas" class="form-control"
                                     value="">
                    </div>
                    <div class="form-group">
                      <label for="">FOTO</label>
                      <input type="file" name="foto" class="form-control">
                    </div>
                     
                    <input type="reset" class="btn btn-danger" data-dismiss="modal" value="Reset">
                    <input type="submit" class="btn btn-primary" Value="Simpan">
               <?= form_close();?>
            </div>
        </div>
    </div>
</div>