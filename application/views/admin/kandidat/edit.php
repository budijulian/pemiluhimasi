 <div class="content-wrapper">
     <div class="row">
         <div class="col col-sm-12 col-xs-12">
             <section class="content-header">
                 <h1>
                     Data Kandidat
                     <small>Edit Data</small>
                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url().'kandidat/'?>"><i class="fa fa-dashboard"></i>
                             Kandidat</a>
                     </li>
                     <li class="active">Edit Data</li>
                 </ol>
             </section>
             <section class="content">
                 <div class="callout callout-info">
                     <h4>Reminder!</h4>
                     Data Kandidat bersifat rahasia mohon dijaga dan disebar. Terima Kasih
                 </div>
                 <div class="box">
                     <?php foreach ($kandidat as $i) ?>
                     <form action="<?php echo base_url().'admin/kandidat/ubahdata/'.$i->npm_kd?>" method="post">
                         <div class="col col-sm-6">
                             <div class="title-box ">
                                 <h4 class="title-box">Profile</h4>
                                 <div class="form-group text-center">
                                     <img src="<?php echo base_url().'assets/img/kandidat/'.$i->foto?>" alt="foto"
                                         alt="Foto tidak Ditemukan" witdh="400px" height="250px">
                                     <input type="file" name="foto" class="">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <input type="text" name="npm" class="form-control" disabled
                                     value="<?php echo $i->npm_kd ?>">
                             </div>
                             <div class="form-group">
                                 <input type="text" name="nama" class="form-control" value="<?php echo $i->nama ?>">
                             </div>
                         </div>

                         <div class="col col-sm-6">
                             <h4 class="title-box">Detail Kandidat</h4>
                             
                             <div class="form-group">
                                 <label for="">TGL Lahir</label>
                                 <input type="date" name="tgl_lahir" class="form-control"
                                     value="<?php echo $i->tgl_lahir ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Email</label>
                                 <input type="text" name="email" class="form-control" value="<?php echo $i->email ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Jurusan</label>
                                 <input type="text" name="jurusan" class="form-control"
                                     value="<?php echo $i->jurusan ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">Fakultas</label>
                                 <input type="text" name="fakultas" class="form-control"
                                     value="<?php echo $i->fakultas ?>">
                             </div>
                             <div class="form-group">
                                 <label for="">LINK YOUTUBE</label>
                                 <br>example: https://www.youtube.com/watch?v=Mp3Aynsm4Eg
                                 <br>Copy Key v=... 
                                 <input type="text" name="link"  class="form-control"
                                     value="<?php echo $i->link ?>">
                             </div> 
                            <div class="form-group">
                                    <label for="">VISI</label><br>
                                  <textarea name="message" class="form-control" value="<?php echo $i->visi ?>" rows="10" cols="30"><?php echo $i->visi ?></textarea>
                             </div>
                             <div class="form-group">
                                    <label for="">MISI</label><br>
                                  <textarea name="message" class="form-control" value="<?php echo $i->misi ?>" rows="10" cols="30"><?php echo $i->misi ?></textarea>
                             </div>
                             
                             <a href="<?php echo base_url().'admin/kandidat'?>" type="button"
                                 class="btn btn-danger">Kembali</a>
                             <input type="submit" value="Ubah" class="btn btn-info">
                             <br><br>
                         </div>
                     </form>
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
                         <img src="<?php echo base_url().'assets/img/mahasiswa/'.$i->foto?>" alt="foto" witdh="800px"
                             height="400px">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- modal verifikasi data mahasiswa valid /or not -->