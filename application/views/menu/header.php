<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sääsivu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <style>
  .navbar-inverse { background-color: #277FBA}
  .navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { background-color: #195278}
  .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { background-color: #195278}
  .navbar-inverse { border-color: #277FBA}
  .navbar-inverse .navbar-brand { color: #FFFFFF}
  .navbar-inverse .navbar-brand:hover { color: #FFFFFF}
  .navbar-inverse .navbar-nav>li>a { color: #FFFFFF}
  .navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { color: #FFFFFF}
  .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { color: #FFFFFF}
  .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus { color: #FFFFFF}
  .navbar-inverse .navbar-nav>.dropdown>a .caret { border-top-color: #999999}
  .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-top-color: #FFFFFF}
  .navbar-inverse .navbar-nav>.dropdown>a .caret { border-bottom-color: #999999}
  .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-bottom-color: #FFFFFF}
</style>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Sääsivu</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url();?>">Etusivu</a></li>
        <li><a href="<?php echo site_url('saasivu/show_weather');?>">Sää</a></li>
        <li><a href="<?php echo site_url('saasivu/show_weather_history');?>">Säähistoria</a></li>
      </ul>
    </div>
  </nav>

<div class="container">


<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verkkopankki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Verkkopankki</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
      if(isset($_SESSION['log_in']) && $_SESSION['log_in']==true){
        if(is_string($_SESSION['user'])){
          echo 'Tervetuloa '.$_SESSION['user'];
        }
        echo '<li> <a href="'.site_url('login/logout').'">Kirjaudu ulos</a> </li>';
      }
      ?>
      <li> <a href="<?php echo site_url();?>">Etusivu</a> </li>

      <?php
      if(isset($_SESSION['log_in']) && $_SESSION['log_in']==true){
        if($_SESSION['user']=='admin'){
          echo '<li> <a href="'.site_url('user/user_form').'">Lisää tunnus</a> </li>';
          echo '<li> <a href="'.site_url('user/user_form_atm').'">Lisää kortti</a> </li>';
        }
        else if (is_string($_SESSION['user'])) {
          echo '<li> <a href="'.site_url('verkkopankki/accounts').'">Tilit</a> </li>';
          echo '<li> <a href="'.site_url('verkkopankki/transfer').'">Tilisiirto</a> </li>';
        }
        else {
          echo '<li> <a href="'.site_url('pankkiautomaatti/withdraw').'">Nosta rahaa</a> </li>';
          echo '<li> <a href="'.site_url('pankkiautomaatti/check_balance').'">Tarkista saldo</a> </li>';
        }
      }
      else {
        echo '<li> <a href="'.site_url('login/login_form').'">Kirjaudu verkkopankkiin</a> </li>';
        echo '<li> <a href="'.site_url('login/login_form_atm').'">Kirjaudu pankkiautomaattiin</a> </li>';
      }
       ?>
       <li> <a href="<?php echo site_url('pankki/show_customers');?>">Pankkivirkailijan näkymä</a> </li>
    </ul>
  </div>
</nav>

    <div class="container"> -->
