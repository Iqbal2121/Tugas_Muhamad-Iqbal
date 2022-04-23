<?php

include_once 'header.php';
include_once 'sidebar.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Data_Persegi</li>
            <li class="breadcrumb-item"><a href="data_lingkaran.php">Data_Lingkaran</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 4</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <?php
                    require_once 'class_persegi.php';

                    $persegi1= new persegi(40);
                    $persegi2 = new persegi(25);
                    
                    echo "Sisi Persegi 1 = 40 <br> Sisi Persegi 2 = 25<br>";
                    echo "<br>Luas Persegi 1 =".$persegi1->luas();
                    echo "<br>Keliling Persegi 1 = ".$persegi1->keliling();
                    echo "<br>Luas Persegi 2 = ".$persegi2->luas();
                    echo "<br>Keliling PErsegi 2 =".$persegi2->keliling();
                ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include_once 'footer.php';

?>