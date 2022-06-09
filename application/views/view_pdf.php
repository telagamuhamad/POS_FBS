<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Purchase Order</h3>
        </div>
        <table id="table">
        <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Nama Supplier</th>
                                      <th scope="col">Tgl_Pembelian</th>
                                      <th scope="col">Nama Barang</th>
                                      <th scope="col">Jumlah</th>
                                      <th scope="col">Harga Beli</th>
                                      <th scope="col">Discount</th>
                                      <th scope="col">DPP</th>
                                      <th scope="col">PPN</th>
                                      <th scope="col">Total</th>                        
                                  </tr>
                              </thead>
                              <?php
                              foreach($purchase_order as $dt){
                                ?>
                                <tbody>
                                    <tr>
                                      <td><?php echo $dt->id_purchase ?></td>
                                      <td><?php echo $dt->nama_supplier ?></td>
                                      <td><?php echo $dt->tgl_purchase?></td>                                      
                                      <td><?php echo $dt->nama_barang?></td>
                                      <td><?php echo $dt->jumlah_qty?></td>
                                      <td><?php echo $dt->harga_beli?></td>
                                      <td><?php echo $dt->discount?></td>
                                      <td><?php echo $dt->dpp?></td>
                                      <td><?php echo $dt->ppn?></td>
                                      <td><?php echo $dt->total?></td>
                    </tr>
                                </tbody>
                                <?php } ?>
        </table>
    </body>
</html>