<h2>Sää</h2><br>
<?php
$dir = "assets/images/";
?>
<?php if($nykytila[0]['sade'] < 1) { ?>
<img src="<?php echo base_url($dir)."/aurinko.png";?>" alt="">
<?php } ?>
<?php if($nykytila[0]['sade'] == 1) { ?>
<img src="<?php echo base_url($dir)."/sade.png";?>" alt="">
<?php } ?>
<br><br>
Nykyinen säätila <br>
Lämpötila: <?php echo $nykytila[0]['lampo'] ?><br>
Ilmankosteus: <?php echo $nykytila[0]['kosteus'] ?><br>
Ilmanpaine: <?php echo $nykytila[0]['ilmanpaine'] ?><br>
<sub>Viimeksi päivitetty <?php echo substr($nykytila_aika[0]['kello'],0,-3).' '.$nykytila_aika[0]['pvm'] ?> <br>
</sub>

<!-- <table class="table table-bordered table-hover">
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
</table> -->
