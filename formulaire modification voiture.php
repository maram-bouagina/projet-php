<!DOCTYPE html>
<html>
    <head>
        <title>formulaire voiture</title>
    </head>
    <body>
        <?php 
        if (isset($_POST["modif"])) {
            $id = $_POST['ID'];
            $imm = $_POST['imm'];
            $marque = $_POST['marque'];
            $model = $_POST['model'];
            $annee = $_POST['an'];
            $dispo = $_POST["bool"];}
            else{
                $id ='';
            $imm = '';
            $marque ='';
            $model = '';
            $annee ='';
            $dispo ='0';
            }
        ?>
        <h1>Espace admin pour manipulation des voitures</h1>
        <form METHOD= "POST" ACTION="modifier_voiture.php">
        <fieldset>
            <legend> Manipuler Voiture</legend>
            <div >
            <label>donner l'ID de la voiture</label>
            <input readonly type="number" name="ID" value="<?php echo $id?>"  >
            </div>
            <br>
            <div >
            <label>donner la marque de la voiture</label>
            <input type="text" name="marque" value="<?php echo $marque?>" >
            </div>
            <br>
            <div >
            <label>donner le model de la voiture</label>
            <input type="text" name="model" value="<?php echo $model?>">
            </div>
            <br>
            <div >
            <label>donner l'année de fabrication de la voiture</label>
            <input type="number" name="an" value="<?php echo $annee?>" >
            </div>
            <br>
            <div >
            <label>donner l'immatriculation</label>
            <input type="number" name="imm" value="<?php echo $imm?>">
            </div>
            <br>
            <div >
            <label>donner la disponibilite</label>
            <input type="radio" name="bool" value="1" <?php if ((int)$dispo===1) echo "checked"; ?> >dispo
            <input type="radio" name="bool" value="0"<?php if ((int)$dispo===0) echo "checked"; ?> >non dispo
            </div>
            <br>
            <div >
            <input type="submit" name="modif" value="modifier" >
            </div>
        </fieldset>
        </form>
       
    </body>
</html>
