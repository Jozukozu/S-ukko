<br><h2>Säähistoria <?php echo substr($saatila[0]['pvm'],0,-2) ?></h2><br><br><br>
<?php
$dir = "assets/images/";
?>
<div>
  <table class="table table-borderless">
    <?php
    foreach ($saatila as $rivi) {
      echo '<tr>';
      echo '<td align="center" style="vertical-align:middle"><font size="5">'.substr($rivi['kello'],0,-3).'</font></td>';
      echo '<td align="center" style="vertical-align:middle"><table class="table table-borderless"><tr>';
      if($rivi['sade'] > 0.1 && $rivi['lampo'] >= 0)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/sade.png".'" alt="" height="150" width="150"></td>';
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
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/lumi.png".'" alt="" height="150" width="150"></td>';
        $saa = "Lumisadetta";
      }
      else if($rivi['valo'] < 1)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/pilvi.png".'" alt="" height="150" width="150"></td>';
        $saa = "Pilvistä";
      }
      else if($rivi['valo'] < 5/* && (substr($rivi['kello'],0,-6) > 19 || substr($rivi['kello'],0,-6) < 7)*/)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/puolipilvikuu.png".'" alt="" height="150" width="150"></td>';
        $saa = "Puolipilvistä";
      }
      else if($rivi['valo'] < 10/* && (substr($rivi['kello'],0,-6) > 19 || substr($rivi['kello'],0,-6) < 7)*/)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/kuu.png".'" alt="" height="150" width="150"></td>';
        $saa = "Poutaista";
      }
      else if($rivi['valo'] < 500)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/pilvi.png".'" alt="" height="150" width="150"></td>';
        $saa = "Pilvistä";
      }
      else if($rivi['valo'] < 1500)
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/puolipilvi.png".'" alt="" height="150" width="150"></td>';
        $saa = "Puolipilvistä";
      }
      else
      {
        echo '<td align="center" style="vertical-align:middle"><img src="'.base_url($dir)."/aurinko.png".'" alt="" height="150" width="150"></td>';
        $saa = "Poutaista";
      }
      echo '</tr><tr><td align="center" style="vertical-align:middle"><font size="4">'.$saa.'</font></td></tr></table>';
      echo '<td align="center" style="vertical-align:middle"><table class="table table-borderless"><tr><td align="center" style="vertical-align:middle"><font size="4">Lämpötila: '.$rivi['lampo'].'°C</font></td></tr>';
      echo '<tr><td align="center" style="vertical-align:middle"><font size="4">Ilmankosteus: '.$rivi['kosteus'].' %</font></td></tr>';
      echo '<tr><td align="center" style="vertical-align:middle"><font size="4">Ilmanpaine: '.$rivi['ilmanpaine'].' hPa</font></td></tr></table></td>';
      echo '</tr>';
    }
    ?>
  </table>
</div>
