<!DOCTYPE html>
<html>
    <head>
        <title>formulaire d'authentification client</title>
    </head>
    <body>
        <?php
        include_once('connexion.php');
        echo "<h1>Espace inscription client</h1>
        <form METHOD= 'POST' ACTION='connexion_client.php'>
        <fieldset>
            <legend> connectez vous</legend>
            <div >
            <label>donner ton adresse email </label>
            <input type='email' name='mail' value='' >
            </div>
            <br>
            <div >
            <label>donner ton mot de passe</label>
            <input type='password' name='mdp' value='' >
            </div>
            <br>
            <div >
            <input type='submit' name='login' value='se connecter'>
            <input  type='hidden' name='id' value='".htmlspecialchars($_POST['id'])."'>
            <input type='reset'  value='refaire' >
            </div>
        </fieldset>
        </form>";?>
        
    </body>
</html>
