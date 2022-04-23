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
            <h1>Project-1</h1>
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
                <h3 class="card-title">Kumpulan Tugas dan Praktikum Pemrograman Web</h3>

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
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Berikut Penjelasannya :
                  </a>
                  <a href="variabel.php" class="list-group-item list-group-item-action">Praktikum 1</a>
                  <a href="form_nilai.php" class="list-group-item list-group-item-action">Praktikum 2</a>
                  <a href="home.php" class="list-group-item list-group-item-action">Praktikum 3</a>
                  <a href="data_lingkaran.php" class="list-group-item list-group-item-action">Praktikum 4</a>
                  <a href="use_bank.php" class="list-group-item list-group-item-action">Praktikum 5</a>
                  <a href="tugas.php" class="list-group-item list-group-item-action">Tugas</a>
                </div>
              </div>
              <!-- /.card-body -->
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