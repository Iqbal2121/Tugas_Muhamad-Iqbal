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
              <li class="breadcrumb-item">Array</li>
              <li class="breadcrumb-item"><a href="array_siswa.php">Array_Siswa</a></li>
              <li class="breadcrumb-item"><a href="praktikum1.php">Variabel</a></li>
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
                <h3 class="card-title">Praktikum 1</h3>

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
                //pendefinisian array
                    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
                    // mencetak buah ke index ke 2
                    echo $ar_buah[2];
                    // mencetak jumlah buah
                    echo '<br/>Jumlah Buah ' . count($ar_buah);
                    // mencetak seluruh buah
                    echo '<ol>';
                    foreach($ar_buah as $buah){
                    echo '<li>'. $buah .'</li>';
                    }
                    echo '</ol>';
                    // menambahkan buah
                    $ar_buah[]="Durian";
                    // menghapus buah index ke 1
                    unset($ar_buah[1]);
                    // mengubah buah index ke 2 menjadi Manggis
                    $ar_buah[2]="Manggis";
                    // mencetak seluruh buah dengan index nya
                    echo '<ul>';
                    foreach($ar_buah as $k => $v){
                    echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
                    }
                    echo '</ul>';
              ?>
              </hr>

                <!DOCTYPE html>
                <html>
                <body>
                <?php
                //sort array
                    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
                    echo '<ol>';
                    foreach($ar_buah as $k =>$v){
                    echo '<li>'.$k.' - ' . $v .'</li>';
                    }
                    echo '</ol>';
                    sort($ar_buah);
                    echo '<hr/>';
                    echo '<ol>';
                    foreach($ar_buah as $k =>$v){
                    echo '<li>'.$k.' - ' . $v .'</li>';
                    }
                    echo '</ol>';
                ?>
                <hr/>
                </body>
                </html>

                <!DOCTYPE html>
                <html>
                    <body>
                        <?php
                            //array pop
                            $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                            array_pop($tims);
                            foreach($tims as $person){
                                echo $person.'</br>';
                            }
                        ?>
                        <hr/>
                        <?php
                        //array push
                        $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                            array_push($tims, "Watiah");
                            foreach($tims as $person){
                                echo $person.'</br>';
                            }    
                        ?>
                    </body>
                </html>
                <hr/>
                <!DOCTYPE html>
                <html>
                    <body>
                        <?php
                            //array pop
                            $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                            array_shift($tims);
                            foreach($tims as $person){
                                echo $person.'</br>';
                            }
                        ?>
                        <hr/>
                        <?php
                        //array push
                        $tims = ["Erwin", "Heru", "Ali", "Zaki"];
                            array_unshift($tims, "Watiah", "Joko");
                            foreach($tims as $person){
                                echo $person.'</br>';
                            }    
                        ?>
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