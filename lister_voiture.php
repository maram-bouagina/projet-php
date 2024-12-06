<?php
include_once('connexion.php');
$sql='select * from voiture';
$resultat=$pdo->query("$sql");
$res=$resultat->fetchall(PDO::FETCH_ASSOC);
echo " <table border='3'>";
echo "<tr >";
echo "<td>ID</td><td>Marque</td><td>modele</td><td>annee</td><td>disponiblité</td><td>immatriculation</td>";
echo "</tr>";
		
 
foreach($res as $voit ){
    echo "<tr>";
    echo"<td>".$voit["ID"]."</td>";
    echo"<td>".$voit["marque"]."</td>";
    echo"<td>".$voit["modele"]."</td>";
    echo"<td>".$voit["annee"]."</td>";
    if ( (int) $voit["disponibilte"] ===1 ){echo "<td>"."oui"."</td>";}
    else {echo "<td>"."non"."</td>";}
    echo"<td>".$voit["immatriculation"]."</td>";
      echo "<td>
      <form METHOD= 'POST' ACTION='formulaire modification voiture.php'>
        <input  type='hidden' name='ID' value='".$voit['ID']."' >
      <input  type='hidden' name='marque' value='".$voit['marque']."'  >
      <input   type='hidden' name='model' value='".$voit['modele']."' >
      <input type='hidden' name='an' value='".$voit['annee']."' >
      <input  type='hidden' name='imm' value='".$voit['immatriculation']."' >
      <input  type='hidden' name='bool' value='".$voit['disponibilte']."' >
      <input type='submit' name='modif' value='modifier'>
      </form>
      
</td>";
echo "<td>
  <form METHOD= 'POST' ACTION='supprimer_voiture.php'>
        <input  type='hidden' name='ID' value='".$voit['ID']."' >
       <input type='submit' name='supp' value='supprimer'>
      </form>
      
</td>";}
echo "</tr>";
echo "</table>";
echo "<form METHOD= 'POST' ACTION='formulaire ajout voiture.php'>
<input type='submit' name='ajout' value='ajouter'>
</form>";   


?>