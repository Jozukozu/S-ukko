<h2>Säähistoria</h2><br>

<?php $date = strtotime($nykytila_aika[0]['pvm']);
$date2 = strtotime('-4 day', $date); ?>

<button onclick="maanantaiShow()" class="btn btn-primary">1</button>

<div id="maanantai">
  <table class="table table-bordered table-hover">
    <tr class="table table-info">
      <th>pvm</th><th>kello</th><th>saa</th><th>lampo</th><th>sade</th><th>kosteus</th><th>valo</th><th>vkpaiva</th>
    </tr>
    <?php
      foreach ($saatila as $rivi) {
        if($rivi['pvm'] == "$date2")
        {
        echo '<tr>';
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
      }
    ?>
  </table>
</div>

<script>
  var x = document.getElementById("maanantai");
  x.style.display = "none";
</script>

<script>
function maanantaiShow() {
    var x = document.getElementById("maanantai");
    if (x.style.display === "none") {
        x.style.display = "inline";
    } else {
        x.style.display = "none";
    }
}
</script>
