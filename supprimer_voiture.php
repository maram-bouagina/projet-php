
<?php
include_once('connexion.php');
 if(isset($_POST["supp"])){
    $id = $_POST['ID'];
    $sql="DELETE FROM voiture WHERE ID = :ID";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":ID",$id);
    if($stmt->execute()){
        $message="voiture supprimée avec succes ";
    
    }
    else{
        $message="echec de supression ";
    }
    echo $message;
}
echo   "<form METHOD= 'POST' ACTION='lister_voiture.php'>
            <input type='submit'  value='voir liste'>
            </form>";
?>


