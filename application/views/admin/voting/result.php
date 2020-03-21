<!-- mengambil nilai dari controller -->
<?php foreach($status as $b)?>
<?php foreach($status2 as $c)?>
<div class="content-wrapper">
    <div class="row">
        <div class="col col-sm-12 col-xs-12">
            <section class="content-header">
                <h1>
                    Hasil Pengumuman Pemilihan 
                    <small>Suara</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Result</li>
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
                                <span class="info-box-number"><?=$b->total_vote?><small> Suara</small></span>
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
                                <span class="info-box-number"><?=$c->total_tidaksah?><small> Suara</small></span>
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
                                <span class="info-box-text">Countdown</span>
                                <span class="info-box-number"id="hitungmundur"></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    <!-- /.info-box -->
                    </div>
                </div>
                <div class="box text-center">
                    <div class="box-title">
                        <h1 class="text-primary"><strong>PENGUMUMAN CALON KETUA HIMPUNAN </strong></h1>
                    </div>
                    <div class="box-body"><?php #endregio 
                            $no =1;
                            foreach ($vote as $i) {?>
                        <div class="col-md-6 text-center">
                            <div class="card" style="width: 50rem;">
                                <img class="responsive-img"
                                    src="<?php echo base_url().'assets/img/kandidat/'.$i->foto ?>" alt="foto"
                                    witdh="650px" height="350px">
                                <div class="card-body">
                                    <h4 class="text-primary"><?= $i->nama?></h4>
                                    <h1 class="text-info text-bold"><?= $i->jumlah?> <span>SUARA</span></h1>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="col col-sm-12 text-center"><br>
                        <h3 class="text-primary"><strong>GRAFIK </strong></h3>
                            <canvas class="text-center" id="myChart" width="50px" height="25px"></canvas>
                        </div>
                    </div>
                    <!-- /.box-header -->
                  
                </div>
        </section>
    </div>
   </div>
</div>
<!-- !--jQuery library-- > -->
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
<link rel="text/js" type="stylesheet" href="<?php echo base_url()?>assets/js/bootstrap.js">
</body>

<!--Load chart js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
 
<script>
    <?php
        // mengambil nilai pada database dan ditampilkan ke grafik
        foreach($vote as $v){
            $d_nama[] = $v->nama;
            $d_jumlah[] = (float) $v->jumlah;
        }
    
                    ?>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($d_nama);?>,
                    datasets: [{
                            label: '# Grafik Suara Masuk',
                            data: <?php echo json_encode($d_jumlah);?>,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>

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
            " " + days +
            " Hari " + hours +
            " Jam " + minutes +
            " Menit " + seconds +
            " Detik ";
    }, 1000);
</script>