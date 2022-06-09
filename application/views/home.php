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
<a href="<?= base_url('C_viewpurchase');?>"><button class="btn btn-primary btn-lg">Purchase Order</button></a>
<a href="<?= base_url('C_viewsales');?>"><button class="btn btn-primary btn-lg">Sales Order</button></a>
<a href="<?= base_url('C_supplier');?>"><button class="btn btn-primary btn-lg">Master Supplier</button></a>
<a href="<?= base_url('C_barang');?>"><button class="btn btn-primary btn-lg">Master Barang</button></a>
<a href="<?= base_url('C_customer');?>"><button class="btn btn-primary btn-lg">Master Customer</button></a>

</body>    
</html>