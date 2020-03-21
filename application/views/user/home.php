        <!DOCTYPE html>

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Pemilu Online Himasi | Halaman Depan</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="asset/css/bootstrap.css" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        </head>

        <body>
            <nav class="navbar fixed-bottom navbar-light bg-light ">
                <div class="text-center mb-0" style="padding-left: 25%;">
                    <h3 id="hitungmundur" class="text-primary"> </h3>
                </div>
                <div style="position:fixed;right:10px;bottom:10px;">
                    <a
                        href="https://api.whatsapp.com/send?phone=+6288210829521&text=Halo Panitia Himasi,Saya ingin bertanya..">
                        <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
                            <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Hubungi
                            Panitia.</button></a>
                </div>
            </nav>

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo base_url('home')?>"> <img
                            src="<?php echo base_url()?>assets/img/himasi.png" width="30" height="30"
                            class="d-inline-block align-top" alt=""><strong> PEMILU HIMASI 2020</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" style="padding-left:45%;" id="navbarTogglerDemo02">
                        <!-- Button trigger modal -->
                        <label class="text-white my-5 my-sm-2">Hello <?= $this->session->userdata('nama')?> </label>
                        <div class="dropdown">
                            <button class=" btn btn-outline-light my-2 my-sm-0" id="dropdownMenuButton"
                                data-toggle="dropdown" expanded="false">Akun</button>
                            <button class="dropdown-menu bg-gradient-info" witdh="70px" labelledby="dropdownMenuButton">
                                <div class="col-sm-10 text-center">
                                    <img src="<?php echo base_url().'assets/img/mahasiswa/'.$this->session->userdata('foto')?>"
                                        witdh="60px" height="100px" class="card-img-top" alt="...">
                                </div>
                                <br>
                                <a href="#" class="dropdown-item fa fa-edit" data-toggle="modal"
                                    data-target="#datadiri">Data
                                    Diri</a><br>
                                <a href="<?php echo base_url().'user/logout'?>"
                                    class="dropdown-item fa-sign-out">Keluar</a>
                            </button>
                        </div>

                        <!-- Button trigger modal -->
                        <button class=" btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#pengumuman"
                            type="submit">Voting</button>
                    </div>
                </div>
            </nav>
            <!-- awal modal pengumuman-->

            <!-- awal modal notif-->
            <!-- Modal1 -->
            <div class="modal fade" id="datadiri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" class="text-primary" id="exampleModalLongTitle">DATA DIRI</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="panel-body">
                                <?= form_open_multipart('home/ubah') ?>
                                <label class="control-label col-sm-4">STATUS : <?php $ket= $this->session->userdata('ket');
                                if($ket==""){echo "<h5><span class=' badge badge-pill badge-danger'>Belum Verifikasi</span></h5>";}else{echo "<h5><span class=' badge badge-pill badge-success'>Sudah Verifikasi</span></h5>";}
                                ?></label>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="npm_mhs"
                                        value="<?= $this->session->userdata('npm_mhs')?>" required />
                                    </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Nama</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="nama"
                                        value="<?= $this->session->userdata('nama')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Jurusan</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="jurusan"
                                        value="<?= $this->session->userdata('jurusan')?>" required />
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4">Password</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="pass"
                                        value="<?= $this->session->userdata('pass')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Tanggal Lahir</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="tgl_lahir"
                                        value="<?= $this->session->userdata('tgl_lahir')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Jalur</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="jalur"
                                        value="<?= $this->session->userdata('jalur')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Angkatan</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="text" name="angkatan"
                                        value="<?= $this->session->userdata('angkatan')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Email</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input class="form-control" type="email" name="email"
                                        value="<?= $this->session->userdata('email')?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">FOTO KTM</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <img src="<?php echo base_url().'assets/img/mahasiswa/'. $this->session->userdata('ktm')?>"
                                        alt="Foto tidak Ditemukan" witdh="200px" height="120px">
                                </div>
                            </div>
                            <input class="form-control" type="hidden" name="ktm2"
                                        value="<?= $this->session->userdata('ktm')?>"  />
                            <div class="form-group col-sm-12">
                                UBAH Foto KTM/AkademikOnline/KRS/KHS/<br>
                                *jika mengubah data,foto ktm wajib diupload!
                                <input class="form-control" value="<?= $this->session->userdata('ktm')?>" type="file" name="ktm" />

                            </div>
                            <div class="form-group col-sm-12">
                                <input class="form-control btn btn-outline-success" type="submit" value="UBAH PROFILE"
                                    name="submit" value="" />
                            </div>
                            <?= form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir modal -->
            <!-- awal modal notif-->
            <!-- Modal1 -->
            <div class="modal fade" id="pengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" class="text-primary" id="exampleModalLongTitle">VOTING</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- <a  href="" class='text-white'> -->
                        <div class="modal-body">
                            <a id="btn-vote" type="button" href="<?php echo base_url('home/vote')?>"
                                class="btn btn-primary my-2 my-sm-0">
                                VOTING SEKARANG </a>
                            <span><br>Mohon Voting pada waktu yang telah ditetapkan </span><br>
                            <span class="badge badge-warning"> Waktu Voting Dimulai :
                                <?php  foreach($waktu as $t) echo $t->waktu_buka?>
                                Sampai <?php  foreach($waktu as $t) echo $t->waktu_tutup?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding-top: 80px;">
                <div class="carousel-item active">
                    <div class="row mt-5">
                        <div class="col-lg-12 text-center">
                            <div class="card-header">
                                <h4 class="text-info">Calon Ketua Himasi Periode 2020</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($kandidat as $k) {?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <span class="badge badge-danger">NO URUT <?= $k->no_urut?> </span>
                                    <img src="<?php echo base_url().'assets/img/kandidat/'.$k->foto ?>" witdh="40px"
                                        height="400px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="text-center text-danger"><?= $k->nama?></h5>
                                        <h6 class="text-body">Tgl Lahir : <?= $k->tgl_lahir?></h6>
                                        <h6 class="text-body">NPM : <?= $k->npm_kd?></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <blockquote class="blockquote mb-0">
                                        <br>
                                        <h5 class="text-secondary">VISI</h5><br>
                                        <p><?= $k->visi?></p>
                                        <h5 class="text-secondary">MISI</h5><br>
                                        <p><?= $k->misi?></p>
                                    </blockquote>
                                </div>
                            </div>
                            <hr>
                            <?php }?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 text-center">
                            <div class="card-header">
                                <h4 class="text-info">Video Calon Ketua Himasi Periode 2020</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($kandidat as $k) {?>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <span class="badge badge-danger">NO URUT <?= $k->no_urut?> </span>
                                    <div class="card-body ">
                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/<?= $k->link?>" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php }?>
                        </div>
                    </div>

                    <div class="footer mt-3" style="padding-bottom: 70px;padding-top:10px;">
                        <h6 class="text-info text-center">Copyright-BudiJulian @2020</h6>
                        <h6 class="text-info text-center"> Himpunan Sistem Informasi Universitas Nasional</h6>
                    </div>
                </div>
            </div>
        </body>
        <!-- memberi nilai ke countdown -->
        <script type="text/javascript">
            // set the date we're counting down to
            var target_date = new Date("<?php foreach($waktu as $t) echo $t->waktu_buka ?>").getTime();
            // variables for time units
            var days, hours, minutes, seconds;
            // get tag element
            var countdown = document.getElementById("hitungmundur");
            // update the tag with id "countdown" every 1 second
            setInterval(function () {
                // find the amount of "seconds" between now and target
                var current_date = new Date().getTime();
                var seconds_left = (target_date - current_date) / 1000;
                // do some time calculations
                days = parseInt(seconds_left / 86400);
                seconds_left = seconds_left % 86400;
                hours = parseInt(seconds_left / 3600);
                seconds_left = seconds_left % 3600;
                minutes = parseInt(seconds_left / 60);
                seconds = parseInt(seconds_left % 60);
                // format countdown string + set tag value
                countdown.innerHTML =
                    "Countdown Pemilihan: <span class='badge badge-info'> " + days +
                    "</span> Hari <span class='badge badge-info'> " + hours +
                    " </span> Jam <span class='badge badge-info'> " + minutes +
                    "</span>Menit <span class='badge badge-info'> " + seconds +
                    " </span> Detik ";

            }, 1000);
        </script>

        <!-- !--jQuery library-- > -->
        <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
        <link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">

        </html>