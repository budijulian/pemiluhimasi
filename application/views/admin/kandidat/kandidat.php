<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Data Kandidat
                    <small>Profile</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Kandidat</li>
                </ol>
            </section>
            <section class="content">
                <!-- menepatkan session pesan dari controler -->
                <?= "<div".$this->session->flashdata('message')."</div>";?>
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahdata" type=""><i
                        class="fa fa-plus"></i>TAMBAH</button>
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="datamahasiswa" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Tahun Pilih</th>
                                    <th>No Urut</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                // variabel array mahasiswa menyimpan data dari database
                                foreach($kandidat as $u){?>
                                <tr>
                                    <!-- $u-> nama : nama dari column didalam database -->
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->npm_kd ?></td>
                                    <td><?php echo $u->nama ?></td>
                                    <td><?php echo $u->jurusan ?></td>
                                    <td><?php echo $u->fakultas ?></td>
                                    <td><?php echo $u->tahun_pilih ?></td>
                                    <td><?php echo $u->no_urut ?></td>
                                    <!-- mengirim link dengan memasukan value di url -->
                                    <td><a onclick="javascript:return confirm('Anda Yakin Menghapus Data dengan Npm :<?php echo $u->npm_kd?>?')"
                                            href="<?php echo base_url().'admin/kandidat/hapus/'.$u->npm_kd ?>">
                                            <div class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </div>
                                        </a>
                                        <a href="<?php echo base_url().'admin/kandidat/edit/'.$u->npm_kd ?>">
                                            <div class="btn btn-info">
                                                <i class="fa fa-edit"></i>
                                            </div>
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
                                    <th>Tahun Pilih</th>
                                    <th>No Urut</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
            </section>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Modal tambah -->
    <div class=" modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                
                 <?= form_open_multipart('admin/kandidat/tambah/') ?>
                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="text" name="npm" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="">
                        </div>
                         <div class="form-group">
                                 <label for="">Misi</label>
                        <textarea name="misi" id="" cols="30" class="form-control" rows="10">
                        </textarea>
                                 
                    </div>
                     <div class="form-group">
                                 <label for="">Visi</label>
                                <textarea name="visi" id="" class="form-control" cols="30" rows="10">
                        </textarea>
                                 
                    </div>
                    <div class="form-group">
                                 <label for="">No Urut</label>
                                <input type="number" name="no_urut" class="form-control"
                                     value="">
                    </div>
                    
                    <div class="form-group">
                                 <label for="">Tahun Pilih</label>
                                <input type="number" name="tahun_pilih" class="form-control"
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
                    
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                   
               <?= form_close();?>
                </div>
            </div>
        </div>
    </div>
    <!-- modal verifikasi data mahasiswa valid /or not -->
    <!-- Button trigger modal -->

</div>