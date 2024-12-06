<!DOCTYPE html>
<html>
    <head>
        <title>formulaire inscription client</title>
    </head>
    <body>
        <h1>Espace inscription client</h1>
        <form METHOD= "POST" ACTION="inscription_client.php">
        <fieldset>
            <legend> inscrivez vous</legend>
            <div hidden >
            <input type="number" name='id' value=""  >
            </div>
            <div >
            <label>donner ton nom</label>
            <input type="text" name="nom" value="" >
            </div>
            <br>
            <div >
            <label>donner ton adresse</label>
            <input type="text" name="adresse" value=""  >
            </div>
            <br>
            <div >
            <label>donner ton numero de telephone</label>
            <input type="tel" name="numtel" value=""  >
            </div>
            <br>
            <div >
            <label>donner ton adresse email</label>
            <input type="email" name="mail" value="" >
            </div>
            <br>
            <div >
            <label>donner ton mot de passe</label>
            <input type="password" name="mdp" value="" >
            </div>
            <br>
            <div >
            <input type="submit" name="register" value="s'inscrire" >
            <input type="reset"  value="refaire" >
            </div>
        </fieldset>
        </form>
    </body>
</html>
