<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatable/datatablecss.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatable/datatablecss.min.css') ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container mt-4">
<?php if (!empty($this->session->flashdata('error_login'))) :?>
    <div class="alert alert-warning">
        <p> Mohon maaf password atau username salah </p>
    </div>
<?php endif ?>

    <h2 class="text-center">LAUNDRY
      <br>
      <small>mencuci jadi mudah</small>
    </h2>
    <br>
    <div class="container col-sm-10">
    <div class="card">
    <div class="card-header bg-primary text-white text-center">Login Form</div>    
    <div class="card bg-light">
      <div class="card-body">
    <?= form_open('App_controler/CProsesLogin', ['method' => 'POST']) ?>
            <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" class="form-control" name="nm_pengguna" placeholder="Nama Pelanggan">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary" value="Login">
    <?= form_close()?>
      </div>
  </div>
  </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>