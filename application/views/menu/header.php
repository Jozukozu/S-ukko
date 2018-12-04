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
  ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;
}
/* Create two unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

.left {
  width: 25%;
}

.right {
  width: 75%;
  font-size: large;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
    border: none;
}
</style>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo site_url('saasivu/show_weather');?>">Sääsivu</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('saasivu/show_weather');?>">Sää</a></li>
        <li class="dropdown">
        <a class="dropdown" data-toggle="dropdown" href="#">Säähistoria
        <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <?php

          $this->db->select('pvm');
          $this->db->from('saatila');
          $this->db->where('idsaatila =', 0);
          $pvmnow = $this->db->get()->result_array();

          $this->db->select('idsaatila, pvm');
          $this->db->from('saatila');
          $this->db->order_by('idsaatila', 'desc');
          $this->db->limit(1);
          $id = $this->db->get()->result_array();
          $id2 = $id[0]['idsaatila'];

          if ($pvmnow[0]['pvm'] == $id[0]['pvm'])
          {
          for ($i = 1; $i<8; $i++){
            $this->db->select('pvm');
            $this->db->from('saatila');
            $this->db->where('idsaatila', $id2);
            $pvm = $this->db->get()->result_array();
            $this->db->select('pvm, vkpaiva, idsaatila');
            $this->db->from('saatila');
            $string = $pvm[0]['pvm'];
            $this->db->where('pvm !=', $string);
            $this->db->where('idsaatila <', $id2);
            $this->db->order_by('idsaatila', 'desc');
            $this->db->limit(1);
            $tiedot = $this->db->get()->result_array();
            if($tiedot != null && $pvmnow[0]['pvm'] != $tiedot[0]['pvm'])
            {
            $id2 = $tiedot[0]['idsaatila'];
            echo '<li><a href="'.site_url('saasivu/show_weather_history/').$i.'">'.$tiedot[0]['vkpaiva'].' '.$tiedot[0]['pvm'].'</a></li>';
          }
          }
          }

          else {
            $this->db->select('pvm, vkpaiva, idsaatila');
            $this->db->from('saatila');
            $this->db->where('idsaatila', $id2);
            $pvm = $this->db->get()->result_array();
            echo '<li><a href="'.site_url('saasivu/show_weather_history/1').'">'.$pvm[0]['vkpaiva'].' '.$pvm[0]['pvm'].'</a></li>';
            for ($i = 2; $i<8; $i++){
              $this->db->select('pvm');
              $this->db->from('saatila');
              $this->db->where('idsaatila', $id2);
              $pvm = $this->db->get()->result_array();
              $this->db->select('pvm, vkpaiva, idsaatila');
              $this->db->from('saatila');
              $string = $pvm[0]['pvm'];
              $this->db->where('pvm !=', $string);
              $this->db->where('idsaatila <', $id2);
              $this->db->order_by('idsaatila', 'desc');
              $this->db->limit(1);
              $tiedot = $this->db->get()->result_array();
              if($tiedot != null && $pvmnow[0]['pvm'] != $tiedot[0]['pvm'])
              {
              $id2 = $tiedot[0]['idsaatila'];
              echo '<li><a href="'.site_url('saasivu/show_weather_history/').$i.'">'.$tiedot[0]['vkpaiva'].' '.$tiedot[0]['pvm'].'</a></li>';
            }
            }
          }?>
        </ul>
      </li>
      </ul>
    </div>
  </nav>


<div class="container">
