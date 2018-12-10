<br><h2>Säätila <?php echo substr($saatila[0]['pvm'],0,-2) ?></h2><br>
<?php
$dir = "assets/images/";
?>
<div class="column left">
  <br><br><img src="<?php if($nykytila[0]['sade'] > 0.1 && $nykytila[0]['lampo'] >= 0)
  {
    echo base_url($dir)."/sade.png";
    if($nykytila[0]['sade'] < 0.3)
    {
      $saa = "Kevyttä sadetta";
    }
    else if($nykytila[0]['sade'] < 0.7)
    {
      $saa = "Sadetta";
    }
    else
    {
      $saa = "Rankkaa sadetta";
    }
  }
  else if($nykytila[0]['sade'] > 0.1 && $nykytila[0]['lampo'] < 0)
  {
    echo base_url($dir)."/lumi.png";
    $saa = "Lumisadetta";
  }
  else if($nykytila[0]['valo'] < 1)
  {
    echo base_url($dir)."/pilvi.png";
    $saa = "Pilvistä";
  }
  else if($nykytila[0]['valo'] < 5)
  {
    echo base_url($dir)."/puolipilvikuu.png";
    $saa = "Puolipilvistä";
  }
  else if($nykytila[0]['valo'] < 10)
  {
    echo base_url($dir)."/kuu.png";
    $saa = "Poutaista";
  }
  else if($nykytila[0]['valo'] < 500)
  {
    echo base_url($dir)."/pilvi.png";
    $saa = "Pilvistä";
  }
  else if($nykytila[0]['valo'] < 1500)
  {
    echo base_url($dir)."/puolipilvi.png";
    $saa = "Puolipilvistä";
  }
  else
  {
    echo base_url($dir)."/aurinko.png";
    $saa = "Poutaista";
  }?>" alt="" height="250" width="250">
  <br><br><sub>Viimeksi päivitetty <?php echo substr($nykytila_aika[0]['kello'],0,-3).' '.$nykytila_aika[0]['pvm'] ?> <br>
  </sub><br><br>
</div>
<div class="column middle"><br><br><br><br><br>
  <?php echo $saa; ?><br><br>
  Lämpötila: <?php echo $nykytila[0]['lampo'] ?>°C<br>
  Ilmankosteus: <?php echo $nykytila[0]['kosteus'] ?> %<br>
  Ilmanpaine: <?php echo $nykytila[0]['ilmanpaine'] ?> hPa<br>
</div>
<div class="column right">
  <img src="
  <?php
    if ($nykytila[0]['lampo'] < 0)
    {
      echo base_url($dir)."/saaukkolumi.png";
    }
    else if ($nykytila[0]['sade'] > 0.1)
    {
      echo base_url($dir)."/saaukkosade.png";
    }
    else if ($nykytila[0]['lampo'] > 20)
    {
      echo base_url($dir)."/saaukkokesa.png";
    }
    else
    {
      echo base_url($dir)."/saaukkomuu.png";
    }
   ?>
   " alt="" width="500"><br><br><br><br><br>
</div>

<div>
  <table class="table table-borderless">
    <th>Päivän sää</th>
    <?php
    foreach ($saatila as $rivi) {
      if($rivi['idsaatila'] == 0)
      {
        continue;
      }
      else
      {
      echo '<tr>';
      echo '<td align="center" style="vertical-align:middle"><font size="5">'.substr($rivi['kello'],0,-3).'</font></td>';
      echo '<td align="center" style="vertical-align:middle"><table class="table table-borderless"><tr>';
      if($rivi['sade'] > 0.1 && $rivi['lampo'] >= 0)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/sade.png".'" alt="" height="100" width="100"></td>';
        if($rivi['sade'] < 0.3)
        {
          $saa = "Kevyttä sadetta";
        }
        else if($rivi['sade'] < 0.7)
        {
          $saa = "Sadetta";
        }
        else
        {
          $saa = "Rankkaa sadetta";
        }
      }
      else if($rivi['sade'] > 0.1 && $rivi['lampo'] < 0)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/lumi.png".'" alt="" height="100" width="100"></td>';
        $saa = "Lumisadetta";
      }

      else if($rivi['valo'] < 1)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/pilvi.png".'" alt="" height="100" width="100"></td>';
        $saa = "Pilvistä";
      }
      else if($rivi['valo'] < 5)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/puolipilvikuu.png".'" alt="" height="100" width="100"></td>';
        $saa = "Puolipilvistä";
      }
      else if($rivi['valo'] < 10)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/kuu.png".'" alt="" height="100" width="100"></td>';
        $saa = "Poutaista";
      }
      else if($rivi['valo'] < 500)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/pilvi.png".'" alt="" height="100" width="100"></td>';
        $saa = "Pilvistä";
      }
      else if($rivi['valo'] < 1500)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/puolipilvi.png".'" alt="" height="100" width="100"></td>';
        $saa = "Puolipilvistä";
      }
      else
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/aurinko.png".'" alt="" height="100" width="100"></td>';
        $saa = "Poutaista";
      }
      echo '</tr><tr><td align="center" style="vertical-align:middle"><font size="4">'.$saa.'</font></td></tr></table>';
      echo '<td align="center" style="vertical-align:middle"><table class="table table-borderless"><tr><td align="center" style="vertical-align:middle"><font size="4">Lämpötila: '.$rivi['lampo'].'°C</td></tr>';
      echo '<tr><td align="center" style="vertical-align:middle"><font size="4">Ilmankosteus: '.$rivi['kosteus'].' %</font></td></tr>';
      echo '<tr><td align="center" style="vertical-align:middle"><font size="4">Ilmanpaine: '.$rivi['ilmanpaine'].' hPa</font></td></tr></table></td>';
      echo '</tr>';
    }
    }
    ?>
  </table>
</div>
