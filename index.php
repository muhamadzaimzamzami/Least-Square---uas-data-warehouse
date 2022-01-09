<?php
    require "config/connect.php";
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
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Grafik Omset Penjualan</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="meChart" height="158"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card gradient-bottom">
                                <div class="card-header">
                                    <h4>Omset</h4>
                                    
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