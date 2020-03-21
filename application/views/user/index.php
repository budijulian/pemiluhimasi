<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemilu Online Himasi | 2020</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>assets/css/bootstrap.css" />
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
            <a href="https://api.whatsapp.com/send?phone=+6288210829521&text=Halo Panitia Himasi,Saya ingin bertanya..">
            <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
            <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Hubungi Panitia.</button></a>
        </div> 
    </nav>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>"> <img
                    src="<?php echo base_url()?>assets/img/himasi.png" width="30" height="30"
                    class="d-inline-block align-top" alt=""><strong> PEMILU HIMASI 2020</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" style="padding-left:64%;" id="navbarTogglerDemo02">
                <!-- Button trigger modal -->
                <button class=" btn btn-outline-light my-2 my-sm-0" data-toggle="modal" data-target="#masuk"
                    type="submit">Masuk</button>
                <a class=" btn btn-primary my-2 my-sm-0" href="<?php echo base_url().'daftar/'?>"
                    type=""><strong>Daftar</strong></a>
            </div>
        </div>
    </nav>
    <!-- awal modal login-->
    <!-- Modal1 -->
    <div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" class="text-primary" id="exampleModalLongTitle">SISTEM LOGIN PEMILU HIMASI 2020</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form action="<?= base_url().'home/signin'?>" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-4">NPM</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <input class="form-control" type="text" name="npm" value="" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Password</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <input class="form-control" type="password" name="pass" value="" required />
                                <p id="notifikasi" class="text-gray-300"><i>* :</i></p>
                            </div>
                            <div class="form-group col-sm-8">
                                <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat"
                                    value="Masuk">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal -->
    <div class="container" style="padding-top: 57px;">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url()?>assets/img/della-01.jpeg" class="d-block w-100"
                        style="width: 100%;height: 500px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>assets/img/dima-02.jpeg" class="d-block w-100"
                        style="width: 100%;height: 500px;" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
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
                            <img src="<?php echo base_url().'assets/img/kandidat/'.$k->foto ?>" witdh="40px" height="400px" class="card-img-top"
                                alt="...">
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
                    <?php }  echo 'Tanggal sekarang: ' .date('Y-m-d H:i:s');?>
                </div>
            </div>
            <div class="row mt-5">
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
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $k->link?>"
                                    frameborder="0"
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
</body>
<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
</body>
<!-- memberi nilai ke countdown -->
<script type="text/javascript">
    // set the date we're counting down to
    var target_date = new Date("<?php foreach($waktu as $t) echo $t->waktu_buka; ?>").getTime();
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</html>