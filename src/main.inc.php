<main>
<div class="section" role="table" aria-label="table-info">
<table>
  <caption>Le top 10 des langages</caption>
<thead>
<tr>
   <th>Classement</th>
   <th>Langage</th>
   <th>Type</th>
</tr>
</thead>
<tbody>
   <?php
 include_once('./src/tb.inc.php');
 for($a = 0; $a < 4; $a++){ echo"<tr>";for($z = 0; $z < 3; $z++)echo "<td>".$tab[$a][$z]."</td>";echo"</tr>";
 };
  ?>
</tbody>
<tfoot>
    <tr>
     <th>Classement</th>
     <th>Langage</th>
     <th>Type</th>
    </tr>
   </tfoot>
  </table>
 </div>
</main>