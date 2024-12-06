 <?php
        include_once('connexion.php');
        if (isset($_POST["recherche"])) {
            $DD=$_POST['DD'];
            $DF=$_POST['DF'];
            $sql="SELECT v.ID AS voiture_id, v.marque, v.modele, v.disponibilte, v.immatriculation
            FROM voiture v
            LEFT JOIN reservation r ON v.ID = r.voiture_id 
            WHERE v.disponibilte = 1 
            AND (r.ID IS NULL OR r.date_fin < :DD OR r.date_debut > :DF)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':DD', $DD);
            $stmt->bindParam(':DF', $DF);
            $stmt->execute();
            $res=$stmt->fetchall(PDO::FETCH_ASSOC);

            if(count($res)==0){
                    echo"pas de voitures disponibles";
            }
            
            else {
                echo " <table border='3'>";
                echo "<tr >";
                echo "<td>ID</td><td>Marque</td><td>modele</td><td>annee</td><td>disponiblité</td><td>immatriculation</td>";
                echo "</tr>";  
                foreach($res as $voit){
                    $ID=$voit["ID"];
                    echo "<tr>";
                    echo"<td>".$voit["ID"]."</td>";
                    echo"<td>".$voit["marque"]."</td>";
                    echo"<td>".$voit["modele"]."</td>";
                    echo"<td>".$voit["annee"]."</td>";
                    if ( (int) $voit["disponibilte"] ===1 ){echo "<td>"."oui"."</td>";}
                    else {echo "<td>"."non"."</td>";}
                    echo"<td>".$voit["immatriculation"]."</td>";
                    echo "</tr>";
                    echo "<td>
                        <form METHOD= 'POST' ACTION='formulaire recherche de voiture.php'>
                            <input  type='hidden' name='id' value='".$DD."' >
                        <input  type='hidden' name='marque' value='".$DD."'  >
                        <input  type='hidden' name='ID' value='".$ID."'  >
                        <input type='submit' name='choisir' value='choisir'>
                        </form>
                        
                    </td>";
                }
                echo "</table>";
                     }
                }
         
                  
                
            

                
       
?>