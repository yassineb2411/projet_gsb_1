a<div class="encadre">

<table class="listeLegere">
      <tr>
          <th class="visiteur">Mois</th>
          <th class='montant'>Montant</th>                
      </tr>
  <?php      
    foreach ( $UnVisiteurTypeFrais as $leVisiteurTypeFrais ) 
    {
      $montant = $leVisiteurTypeFrais['montant'];
      $mois = $leVisiteurTypeFrais['mois'];
  ?>
      <tr>
          <td><?php echo $mois ?></td>
          <td><?php echo $montant ?></td>
      </tr>
  <?php 
    }
  ?>
</table>
</div>