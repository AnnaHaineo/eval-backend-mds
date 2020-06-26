<!DOCTYPE html>
<html>
    <head>
        <title>Mon formulaire</title>
    </head>

    <body>
        <h1>Bienvenue</h1>
        <h2>Commencez-donc par remplir ce formulaire :</h2>
        <form name="inscription" method="get" action="traitement.php">
            Nom : <input type="text" name="agnom"/> <br/>
            Ville : <input type="text" name="agville"/><br/>
            Tèl : <input type="text" name="agtel"/><br/>
            Mail : <input type="text" name="agmail"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
    </body>

</html>