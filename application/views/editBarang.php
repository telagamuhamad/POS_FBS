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
<h2>Purchase Order</h2><br>
<form action="<?= base_url('C_barang/update');?>" method="post">
  <div class="form-group">
    <label>Nama Barang</label>
    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
  </div>  
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" id="jumlah_qty" name="jumlah_qty">
  </div>              
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>    
</html>