<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


    <?= (isset($titulo)) ?' <title>System Ordem | '.$titulo.'</title>' : ' <title>System Ordem</title>' ?>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('public/css/sb-admin-2.min.css')?>" rel="stylesheet">
  <link href="<?= base_url('public/css/app.css')?>" rel="stylesheet">

  <?php
      if(isset($styles)):  ?>
      
        <?php 
            foreach ($styles as $s) { ?>
                <link href="<?= base_url('public/'.$s) ?>" rel="stylesheet" type="text/css">
        <?php   }
        ?>
      
  <?php endif; ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">