<?php
    require "config/connect.php";


    if (isset($_POST['submit'])) {
      $tanggal = $_POST['tanggal'];
      $tanggal1 = strtotime($tanggal);
      $tanggal2 = strtotime("2005-05-30");

      $jarak = $tanggal2 - $tanggal1;
      $hari = abs(round($jarak / 60 / 60 / 24));
      
      $cek_rumus = mysqli_query($conn, "SELECT * FROM least LIMIT 1");
      $dt = mysqli_fetch_array($cek_rumus);
      $a = $dt['a'];
      $b = $dt['b'];
      $x = $dt['x'];
      $n = $dt['n'];

      $newX = $x + $hari;
      $bx = $b*$newX;
      $y = $a+$bx;

      echo "
        <script>
          alert('Hasil Prediksi Omset Pada tanggal ".$tanggal." adalah ".$y."');
        </script>
      ";
      
      
      
     
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "partial/head.php";
  ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php
        require "partial/nav.php";
        require "partial/sidebar.php";
      ?>


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>PREDIKSI OMSET</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Prediksi Omset</a></div>

                        </div>
                    </div>
                    <div class="section-body">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Prediksi Omset</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label>Masukan Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Hasil Prediksi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Prediksi Omset</th>
                                            </tr>
                                            <?php
                                                $omset = mysqli_query($conn, "SELECT * FROM omset ORDER BY tanggal DESC");
                                                $no = 1;
                                                while ($data = mysqli_fetch_array($omset)) {
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $data['tanggal'];?></td>
                                                <td><?php echo $data['omset'];?></td>
                                            </tr>
                                            <?php $no++; } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php
        require"partial/footer.php";      
      ?>
        </div>
    </div>
    <?php
    require "partial/script.php";
  ?>

</body>

</html>