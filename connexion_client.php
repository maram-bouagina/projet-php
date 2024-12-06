<?php
        include_once('connexion.php');
        if (isset($_POST["login"])) {
            $email = $_POST['mail'];
            $mdp = $_POST['mdp'];
            
            $sql = "select * from client where email=:mail and mdp=:mdp";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':mail', $email);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->execute();
            $res=$stmt->fetch(PDO::FETCH_ASSOC);
            if(!$res ){
                echo " impossible de s'authentifier inscrivez vous";
                echo   "  <form METHOD= 'POST' ACTION='formulaire inscription client.php'>
                <input type='submit'  value='s inscrire'>
                </form>";
            }
            else {
                echo 'vous etes connecté(e)';
                echo   "  <form METHOD= 'POST' ACTION=' formulaire recherche de voiture.php'>
                       <input type='hidden' name='id' value='" . htmlspecialchars($res['id']) . "'>
                      <input type='submit'  value='chercher une voiture'>
                      </form>";
                
            }
            }
         
            
?>