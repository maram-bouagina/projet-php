<?php
        include_once('connexion.php');
        if (isset($_POST["register"])) {
            $nom = $_POST['nom'];
            $adresse = $_POST['adresse'];
            $numtel = $_POST['numtel'];
            $email = $_POST['mail'];
            $mdp = $_POST['mdp'];
       
            
            $sql = "INSERT INTO client (
           nom,adresse,numtel,email,mdp) VALUES (:nom,:adresse,:numtel,:email,:mdp )";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nom',$nom);
            $stmt->bindParam(':adresse', $adresse);
            $stmt->bindParam(':numtel', $numtel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mdp', $mdp);
            if ($stmt->execute()) {
            echo "inscription valide.";
            $lastInsertedId = $pdo->lastInsertId();
            echo "<form METHOD= 'POST' ACTION='formulaire authentification client.php'>
            <input type='hidden' name='id' value='" . htmlspecialchars($lastInsertedId ) . "'>
            <input type='submit'  value='se connecter'>
            </form>";
            } else {
            echo "inscription non valide.";
            echo   "<form METHOD= 'POST' ACTION='formulaire inscription client.php'>
            <input type='submit'  value='essayer de nouveau'>
            </form>";
            }
            }
            
?>