<!DOCTYPE html>
<html>

<head>
<title>POS</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>    
</head>

<body>
<!-- Header -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Four Best Synergy</span>
</nav>

<!-- Main Content -->
<a href="<?= base_url('C_so');?>"><button class="btn btn-success btn-md">Add Sales</button></a><br><br>
<a href="<?= base_url('C_viewsales/cetaklaporan');?>"><button class="btn btn-success btn-md">Sales Report</button></a><br><br>
<table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Tgl_Penjualan</th>
                                      <th scope="col">Nama Barang</th>
                                      <th scope="col">Jumlah</th>
                                      <th scope="col">Harga Jual</th>
                                      <th scope="col">Discount</th>
                                      <th scope="col">DPP</th>
                                      <th scope="col">PPN</th>
                                      <th scope="col">Total</th>
                                      <th scope="col">Aksi</th>                        
                                  </tr>
                              </thead>
                              <?php
                              foreach($sales_order as $dt){
                                ?>
                                <tbody>
                                    <tr>
                                      <td><?php echo $dt->id_sales ?></td>
                                      <td><?php echo $dt->tgl_sales?></td>                                      
                                      <td><?php echo $dt->nama_barang?></td>
                                      <td><?php echo $dt->jumlah_qty?></td>
                                      <td><?php echo $dt->harga_jual?></td>
                                      <td><?php echo $dt->discount?></td>
                                      <td><?php echo $dt->dpp?></td>
                                      <td><?php echo $dt->ppn?></td>
                                      <td><?php echo $dt->total?></td>
                        <td>
                            <?php echo anchor('C_viewsales/cetak/'.$dt->id_sales,'Print'); ?>         
                        </td>  
                    </tr>
                </tbody>
            <?php } ?>
        </table></body>    
</html>