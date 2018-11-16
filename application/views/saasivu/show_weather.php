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
