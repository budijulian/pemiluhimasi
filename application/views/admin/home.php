<?php #endregion
foreach ($status as $i) 
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mahasiswa</span>
                        <span class="info-box-number"><?= $i->total_mhs?><small> Orang</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Kandidat</span>
                        <span class="info-box-number"><?= $i->total_kd?><small> Orang</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Suara Masuk</span>
                        <span class="info-box-number"><?= $i->total_vote?><small> Suara</small></span>
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- /.row -->
            <div class="col-md-6">
                <!-- Calendar -->
                <div class="box box-solid bg-green-gradient ">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Calendar</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
</section>
</div>
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
            " " + days +
            " Hari " + hours +
            " Jam " + minutes +
            " Menit " + seconds +
            " Detik ";
    }, 1000);
</script>