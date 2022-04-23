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
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="use_buah.php">Use_Buah</a></li>
              <li class="breadcrumb-item">Use_Bank</li>
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
                <h3 class="card-title">Praktikum 5</h3>

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

                    require_once 'class_accountbank.php';

                    $acc_bank1 = new AccountBank("C001",6000000,"Ahmad");
                    $acc_bank2 = new AccountBank("C002",5350000,"Budi");
                    $acc_bank3 = new AccountBank("C003",2500000,"Kurniawan");

                    // $acc_bank1 -> cetak();
                    // echo '<hr/>';
                    // $acc_bank2 -> cetak();
                    // echo '<hr/>';
                    // $acc_bank3 -> cetak();
                    // echo '<hr/>';

                    $ar_AccBank = [$acc_bank1, $acc_bank2, $acc_bank3];

                ?>

                <!doctype html>
                <html lang="en">
                <head>
                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <title>Simulasi Atm</title>
                    </head>
                    <body>    
                        <div class="container mt-5 mx-auto ">
                            <div class="row my-5 mx-auto text center">
                                <div class="col-md-8 col-sm-12  mx-auto" >
                                    <table class="table table-dark table-hover text-center">
                                    <h4><font face="Times New roman"><strong>Sebelum menjalankan logika bisnisnya</strong></font></h4>
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">No. Account</th>
                                                <th scope="col">Pemilik</th>
                                                <th scope="col">Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $nomor = 1;
                                            foreach($ar_AccBank as $ab){

                                        ?>
                                            <tr>
                                                <th scope="row"><?= $nomor ?></th>
                                                <td><?= $ab->nomor ?></td>
                                                <td><?= $ab->customer ?></td>
                                                <td><?= $ab->getSaldo() ?></td>
                                            
                                            </tr>
                                        <?php
                                            $nomor++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-5 mx-auto ">
                            <div class="row my-5 mx-auto text center">
                                <div class="col-md-8 col-sm-12  mx-auto" >
                                    <h6><font face="Courier New"><strong> <?= 'Ahmad nabung 1.000.000' ?></strong></font></h6>
                                    <h6><font face="Courier New"><strong> <?= 'Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi' ?></strong></font></h6>
                                    <h6><font face="Courier New"><strong> <?= 'Budi tarik uang 2.500.000' ?></strong></font></h6>
                        </div>
                            </div>
                                </div>

                        <?php

                            $acc_bank1->deposit(1000000);
                            $acc_bank1->transfer($acc_bank3, 1500000);
                            $acc_bank1->transfer($acc_bank2, 500000);
                            $acc_bank2->witdrawl(2500000);

                        ?>

                        <div class="container mt-5 mx-auto ">
                            <div class="row my-5 mx-auto text center">
                                <div class="col-md-8 col-sm-12  mx-auto" >
                                    <h4><font face="Times New roman"><strong>Setelah menjalankan logika bisnisnya</strong></font></h4>
                                    <table class="table table-dark table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">No. Account</th>
                                                <th scope="col">Pemilik</th>
                                                <th scope="col">Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $nomor = 1;
                                            foreach($ar_AccBank as $ab){

                                        ?>
                                            <tr>
                                                <th scope="row"><?= $nomor ?></th>
                                                <td><?= $ab->nomor ?></td>
                                                <td><?= $ab->customer ?></td>
                                                <td><?= $ab->getSaldo() ?></td>
                                            
                                            </tr>
                                        <?php
                                            $nomor++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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