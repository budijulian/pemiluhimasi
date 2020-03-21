 <div class="content-wrapper">
     <div class="row">
         <div class="col col-sm-12 col-xs-12">
             <section class="content-header">
                 <h1>
                     Data Mahasiswa
                     <small>Edit Data</small>
                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url().'mahasiswa/'?>"><i class="fa fa-dashboard"></i>
                             Mahasiswa</a>
                     </li>
                     <li class="active">Edit Data</li>
                 </ol>
             </section>
             <section class="content">
                 <div class="callout callout-info">
                     <h4>Reminder!</h4>
                     Data Mahasiswa bersifat rahasia mohon dijaga dan disebar. Terima Kasih
                 </div>
                 <div class="box">
                     <?php foreach ($mahasiswa as $mhs) ?>
                 <?= form_open_multipart('admin/mahasiswa/ubahdata/'.$mhs->npm_mhs) ?>
                          <div class="col col-sm-6">
                             <div class="title-box ">
                                 <h4 class="title-box">Profile</h4>
                                 <div class="form-group text-center">
                                     <img src="<?php echo base_url().'assets/img/mahasiswa/'.$mhs->foto?>"
                                         alt="Foto tidak Ditemukan" witdh="400px" height="250px">
                                     <!-- <input type="file" name="foto" class="form-control"> -->
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="">NPM</label>
                                 <input type="text" name="npm" class="form-control" disabled
                                     value="<?php echo $mhs->npm_mhs ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Nama</label>
                                 <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Angkatan</label>
                                 <input type="text" name="angkatan" class="form-control"
                                     value="<?php echo $mhs->angkatan ?>">
                             </div>
                             <?php $status = $mhs->ket;?>
                             <div class="form-group">
                                 <select name="verifikasi" class="form-control">
                                     <option <?php if($status=='Verifikasi') {echo "selected";} ?> value="Verifikasi">
                                         Verifikasi</option>
                                     <option <?php if($status=='') {echo "selected";} ?> value="">Null
                                     </option>
                                 </select>
                             </div>
                         </div>

                         <div class="col col-sm-6">
                             <h4 class="title-box">Detail Mahasiswa</h4>
                             <div class="form-group">
                                 <label for="">Password</label>
                                 <input type="text" name="pass" class="form-control" value="<?php echo $mhs->pass ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">TGL Lahir</label>
                                 <input type="date" name="tgl_lahir" class="form-control"
                                     value="<?php echo $mhs->tgl_lahir ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Email</label>
                                 <input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Jurusan</label>
                                 <input type="text" name="jurusan" class="form-control"
                                     value="<?php echo $mhs->jurusan ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Fakultas</label>
                                 <input type="text" name="fakultas" class="form-control"
                                     value="<?php echo $mhs->fakultas ?>">
                             </div>
                             <?php $jalur = $mhs->jalur?>
                             <div class="form-group">
                                 <label for="">Jalur</label>
                                 <br>
                                 <input type="radio" name="jalur" id="" value="Reguler"
                                     <?php if($jalur=='Reguler') {echo "checked";} ?>>Reguler
                                 <input type="radio" name="jalur" id="" value="Karyawan"
                                     <?php if($jalur=='Karyawan') {echo "checked";} ?>>Karyawan
                             </div>
                             <div class="form-group">
                                 <!-- <label for="">KTM</label> -->
                                 <!-- <input type="file" name="ktm" id=""> -->
                                 <a href="#" data-toggle="modal" data-target="#lihatktm">Lihat Foto KTM</a>
                             </div>
                             <a href="<?php echo base_url().'admin/mahasiswa'?>" type="button"
                                 class="btn btn-danger">Kembali</a>
                             <input type="submit" value="Ubah" class="btn btn-info">
                             <br>
                         </div>
                     <?= form_close();?>
                 </div>
             </section>
         </div>
     </div>
 </div>

 <!-- Button trigger modal -->
 <!-- Modal tambah -->
 <div class=" modal fade" id="lihatktm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body text-center">
                 <h3 class="modal-title text-info">Kartu Tanda Mahasiswa</h3>
                 <div class="form-group">
                     <div class="form-group text-center">
                         <img src="<?php echo base_url().'assets/img/mahasiswa/'.$mhs->ktm?>" alt="Foto tidak Ditemukan"
                             witdh="800px" height="400px">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- modal verifikasi data mahasiswa valid /or not -->