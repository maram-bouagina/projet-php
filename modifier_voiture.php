
<?php
include_once('connexion.php');
 if(isset($_POST["modif"])){
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
    $sql="update voiture set marque=:marque, modele=:model, annee =:an,immatriculation=:imm ,disponibilte=:bool where ID=:ID";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":ID",$id);
    $stmt->bindParam(":marque",$marque);
    $stmt->bindParam(":model",$model);
    $stmt->bindParam(":an",$annee);
    $stmt->bindParam(":imm",$imm);
    $stmt->bindParam(":bool",$dispo);
    if($stmt->execute()){
        $message="voiture modifié avec succes ";
    
    }
    else{
        $message="echec de modification ";
    }
    echo $message;
}
echo   "<form METHOD= 'POST' ACTION='lister_voiture.php'>
            <input type='submit'  value='voir liste'>
            </form>";
?>


