
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
        <div style="position:fixed;right:10px;bottom:10px;">
            <a href="https://api.whatsapp.com/send?phone=+6288210829521&text=Halo,Saya ingin bertanya..">
                <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px">
                    <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Hubungi Panitia.</button></a>
        </div>
    </nav>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('home')?>"> <img
                    src="<?php echo base_url()?>assets/img/himasi.png" width="30" height="30"
                    class="d-inline-block align-top" alt=""><strong> PEMILU HIMASI 2020</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" style="padding-left:60%;" id="navbarTogglerDemo02">
                <!-- Button trigger modal -->

                <a class=" btn btn-outline-light my-2 my-sm-0" href="<?php echo base_url().'home/'?>"
                    type=""><strong>Home</strong></a>
            </div>
        </div>
    </nav>
    <div class="container" style="padding-top: 57px;">
        <div class="carousel-item active">
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <div class="col-xs12"> 
                        <?= "<div".$this->session->flashdata('notifvote')."</div>";?>
                    </div><br>
                    <div class="card-header">
                        <h4 class="text-info">PEMILIHAN ONLINE HIMPUNAN SISTEM INFORMASI 2020</h4>
                    </div>
                    <h2> <span class="text-white badge badge-pill badge-danger text-center" id="timervote">
                        </span></h2>
                    <span class="text-secondary text-center"><strong> SAATNYA SUARAKAN HAK KITA... </strong></span><br>
                    <span class="text-secondary text-center"><strong>Pilihlah Pemimpin sesuai hati nurani. </strong>
                    </span>
                </div>
                <div class="col-lg-12 text-center">
                    <form action="<?= base_url().'home/voting/'?>" method="post">
                        <div class="row">
                            <?php #endregio 
                            $no =1;
                            foreach ($kandidat as $i) {?>
                            <div class="col-lg-6 text-center ">
                                <img class="responsive-img"
                                    src="<?php echo base_url().'assets/img/kandidat/'.$i->foto ?>" alt="foto"
                                    witdh="100px" height="200px">
                                <div class="card-body">
                                    <h4 class="text-primary"><?= $i->nama?></h4>
                                    <div class="text-center">
                                        <input type="hidden"  class="form-control" value="<?= $this->session->userdata('npm_mhs')?>"  name="npm_mhs">
                                    </div>
                                     <div class="text-center">
                                        <input type="hidden"  class="form-control" value="<?= $i->npm?>"  name="npm_kd">
                                    </div>
                                     <div class="text-center">
                                        <input type="hidden"  class="form-control" value="<?= $i->periode?>"  name="tahun_pilih">
                                    </div>
                                    <div class="text-center">
                                        <input type="radio"  class="form-control" value="<?= $i->no_urut?>" name="no_urut">
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="col-sm-12 text-center">
                                <input type="submit" class="btn btn-outline-primary form-control" value="Vote Sekarang"
                                    name="submit">
                            </div>
                        </div>
                        <!-- /.box-header -->
                    </form>
                </div>
            </div>
            <div class="footer mt-3" style="padding-bottom: 70px;padding-top:10px;">
                <h6 class="text-info text-center">Copyright-BudiJulian @2020</h6>
                <h6 class="text-info text-center"> Himpunan Sistem Informasi Universitas Nasional</h6>
            </div>
</body>
<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
</body>
<!-- memberi nilai ke countdown -->
<script type="text/javascript">
    // Countdown waktu cobloss
    $(document).ready(function () {
        var detik = 0;
        var menit = 5;

        function hitung() {
            setTimeout(hitung, 1000);
            $('#timervote').html('Vote Berakhir dalam ' + menit + ' menit ' + detik + ' detik ');
            detik--;
            if (detik < 0) {
                detik = 59;
                menit--;
                if (menit < 0) {
                    menit = 0;
                    detik = 0;
                    alert("Waktu Habis! Silakan Refresh Kembali")
                }
            }
        }
        hitung();
    });
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