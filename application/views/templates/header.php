<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/icons-css/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/index.css">
    <title >OverDrive</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand title" href="<?= base_url('home') ?>">OverDrive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="justify-content: flex-end;" class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="<?= base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?= base_url('product') ?>">Product</a>
            <?php if (isAdmin()): ?>
              <a class="nav-link" href="<?= base_url('admin') ?>">Admin</a>
              <a class="nav-link" href="<?= base_url('checkout') ?>">Checkout</a>
            <?php endif ?>
            <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
            <?php if ($this->session->userdata('email')): ?>
              <a class="nav-link" href="<?= base_url('authentication/logout') ?>">Logout</a>
            <?php else: ?>
              <a class="nav-link" href="<?= base_url('authentication') ?>">Login</a>
            <?php endif ?>
          </div>
        </div>
    </nav>