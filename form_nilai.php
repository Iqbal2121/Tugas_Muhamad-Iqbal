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
              <li class="breadcrumb-item"><a href="form_belanja.php">Form_Belanja</a></li>
              <li class="breadcrumb-item">Form_Nilai</li>
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
                <h3 class="card-title">Praktikum 2</h3>

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
              <!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <title>Form_Nilai</title>
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              </head>
              <body>
              <form method = "GET" action = "">
              <h3 style="margin:1em">Form Nilai Siswa</h2><hr>
              <div class="container mt-5 mx-auto ">
                  <div class="form-group row">
                      <label for="nama_siswa" class="col-5 col-form-label">Nama Siswa</label> 
                      <div class="col-7">
                      <input id="nama_siswa" name="nama_siswa" placeholder="Nama Mahasiswa" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="select" class="col-5 col-form-label">Mata Kuliah</label> 
                      <div class="col-7">
                      <select id="select" name="select" class="custom-select">
                          <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                          <option value="Basis Data I">Basis Data I</option>
                          <option value="Pemrograman Web">Pemrograman Web</option>
                      </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="uts" class="col-5 col-form-label">Nilai UTS</label> 
                      <div class="col-7">
                      <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="uas" class="col-5 col-form-label">Nilai UAS</label> 
                      <div class="col-7">
                      <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="TP" class="col-5 col-form-label">Nilai Tugas/Praktikum</label> 
                      <div class="col-7">
                      <input id="TP" name="TP" placeholder="Nilai Tugas" type="number" class="form-control">
                      </div>
                  </div> 
                  <div class="form-group row">
                      <div class="offset-5 col-7">
                      <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </div>
                  </form>
              </div>

              <?php
                  if(isset($_GET["simpan"])) :
              ?>
              <?php
                  $sum = ((integer)$_GET["uts"] + (integer)$_GET["uas"] + (integer)$_GET["TP"])/3;
                  
                  if($sum <= 35 ){
                      $sum = "E";
                  }elseif($sum <= 55 ){
                      $nilai ="D";
                  }elseif($sum <= 69 ){
                      $sum ="C";
                  }elseif($sum <= 84 ){
                      $sum ="B";
                  }elseif($sum <= 100){
                      $sum ="A";
                  }else{
                      $sum = "I";
                  }

                  switch($sum){
                      case "E":
                          $grade = "Sangat Kurang ";
                          break;
                      case "D":
                          $grade = "Kurang";
                          break;
                      case "C":
                          $grade = "Cukup";
                          break;
                      case "B":
                          $grade = "Memuaskan ";
                          break;
                      case "A":
                          $grade = "Sangat Memuakan ";
                          break;
                      case "I":
                          $grade = "Tidak Ada";
                          break;
                  }
              ?>
              <?php  endif;?>

              <?php  if(isset($_GET["simpan"])) :?>
                  <div class="container mt-5 mx-auto ">
                      <table class="table table-light table-hover">
                          <thead>
                              <tr>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Mata Kuliah</th>
                                  <th scope="col">Grade</th>
                                  <th scope="col">Predikat</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row"><?= $_GET["nama_siswa"] ?></th>
                                  <td><?= $_GET["select"] ?></td>
                                  <td><?= $sum ?></td>
                                  <td><?= $grade ?></td>
                              </tr>
                          </tbody>
                      </table>

              <?php endif; ?>
              </body>
          </html>
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