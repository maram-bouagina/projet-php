<?php
        include_once('connexion.php');
        if (isset($_POST["ajout"])) {
            $id = $_POST['ID'];
            $imm = $_POST['imm'];
            $marque = $_POST['marque'];
            $model = $_POST['model'];
            $annee = $_POST['an'];
            if(isset($_POST['bool'])){
                $dispo = $_POST['bool'];
            }
            else{
                $dispo="0";
            }
            
            $sql = "INSERT INTO voiture (marque, 
           modele,annee,immatriculation,disponibilte) VALUES (:marque, 
           :model, :an,:imm, :bool)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':marque',$marque);
            $stmt->bindParam(':model', $model);
            $stmt->bindParam(':an', $annee);
            $stmt->bindParam(':imm', $imm);
            $stmt->bindParam(':bool', $dispo);
            if ($stmt->execute()) {
            echo "voiture ajouté avec succès.";
            } else {
            echo "Erreur lors de l'ajout.";
            }
            }
            echo   "<form METHOD= 'POST' ACTION='lister_voiture.php'>
            <input type='submit'  value='voir liste'>
            </form>";
?>