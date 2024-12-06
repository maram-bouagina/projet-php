<!DOCTYPE html>
<html>
    <head>
        <title>formulaire d'authentification client</title>
    </head>
    <body>
        <h1>Espace de recherche de voitures pour les clients</h1>
        <form METHOD= "POST" ACTION="rechercher_voiture_ajouter_reservation.php">
        <fieldset>
            <legend> recherchez la voiture</legend>
            <div >
            <label>donner la date du debut</label>
            <input type="date" name="DD" value=""  >
            </div>
            <br>
            <div >
            <label>donner la date de la fin</label>
            <input type="date" name="DF">
            <br>
            <div >
            <input type="submit" name="resever" value="reserver" >
            <input type="reset"  value="refaire" >
            </div>
            <?php
            if (isset($_POST["choisir"])) {
                include_once('connexion.php');
                $DD = $_POST['DD'];
                 $DF = $_POST['DF'];
                 $voiture_id = $_POST['ID'];
                $sql= "INSERT INTO reservation (client_id,voiture_id,date_debut, 
                date_fin) VALUES (:client_id,:voiture_id,:DD,:DF)";
                $client_id =$_POST['id'];
                 $sql1= "select ID from client c where c.ID=:client_id";
                $stmt1=$pdo->prepare($sql1);
                $stmt1->bindParam(':client_id',$client_id);
                $stmt->bindParam(':id',$ID);
                 $stmt = $pdo->prepare($sql);
                 $stmt->bindParam(':DD',$DD);
                 $stmt->bindParam(':DF',$DF);
                 $stmt->baindParam(':voiture_id',$ID);
                 if ($stmt->execute() && $stmt1->execute()) {
                 echo "reservation ajouté avec succès.";
                 } else {
                 echo "echec lors de l'ajout.";
            }
        }
                ?>
        </fieldset>
        </form>
    </body>
</html>
