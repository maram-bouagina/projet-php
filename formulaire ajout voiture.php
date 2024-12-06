<!DOCTYPE html>
<html>
    <head>
        <title>formulaire ajout  voiture</title>
    </head>
    <body>
        <h1>Espace admin pour manipulation des voitures</h1>
        <form METHOD= "POST" ACTION="ajouter_voiture.php">
        <fieldset>
            <legend> Manipuler Voiture</legend>
            <div hidden >
            <label>donner l'ID de la voiture</label>
            <input type="number" name="ID" value=""  >
            </div>
            <br>
            <div >
            <label>donner la marque de la voiture</label>
            <input type="text" name="marque" value="" >
            </div>
            <br>
            <div >
            <label>donner le model de la voiture</label>
            <input type="text" name="model" value=""  >
            </div>
            <br>
            <div >
            <label>donner l'année de fabrication de la voiture</label>
            <input type="number" name="an" value=""  >
            </div>
            <br>
            <div >
            <label>donner l'immatriculation</label>
            <input type="number" name="imm" value="" >
            </div>
            <br>
            <div >
            <label>donner la disponibilite</label>
            <input type="radio" name="bool" value="1" >dispo
            <input type="radio" name="bool" value="0" >non dispo
            </div>
            <br>
            <div >
            <input type="submit" name="ajout" value="ajouter" >
            <input type="reset"  value="refaire" >
            </div>
        </fieldset>
        </form>
        <form METHOD= "POST" Action="lister_voiture.php">
            <div >  
                <input type="submit"  value="retour" >
            </div>
            </form>
       
    </body>
</html>
