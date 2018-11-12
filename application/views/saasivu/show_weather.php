<h2>Sää</h2><br>
<?php
$dir = "assets/images/";
?>
<img src="<?php echo base_url($dir)."/aurinko.png";?>" alt="">

<table class="table table-bordered table-hover">
  <tr class="table table-info">
    <th>ID</th><th>pvm</th><th>kello</th><th>saa</th><th>lampo</th><th>sade</th><th>kosteus</th><th>valo</th><th>vkpaiva</th>
  </tr>
  <?php
    foreach ($saatila as $rivi) {
      echo '<tr>';
      echo '<td>'.$rivi['idsaatila'].'</td>';
      echo '<td>'.$rivi['pvm'].'</td>';
      echo '<td>'.$rivi['kello'].'</td>';
      echo '<td>'.$rivi['saa'].'</td>';
      echo '<td>'.$rivi['lampo'].'</td>';
      echo '<td>'.$rivi['sade'].'</td>';
      echo '<td>'.$rivi['kosteus'].'</td>';
      echo '<td>'.$rivi['valo'].'</td>';
      echo '<td>'.$rivi['vkpaiva'].'</td>';
      echo '</tr>';
    }
  ?>
</table>
