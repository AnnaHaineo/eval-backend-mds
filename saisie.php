<!DOCTYPE html>
<html>
    <head>
        <title>Mon formulaire</title>
    </head>

    <body>
        <h1>Bienvenue</h1>
        <h2>Commencez-donc par remplir ce formulaire :</h2>
        <!--Création du formulaire -->
        <form name="inscription" method="get" action="traitement.php">
            <!-- Méthode get et traitement des données dans le fichier traitement.php -->
            Nom : <input type="text" name="agnom"/> <br/>
            Ville : <input type="text" name="agville"/><br/>
            Tèl : <input type="text" name="agtel"/><br/>
            Mail : <input type="text" name="agmail"/><br/>
            <br />
            Type de projet<br />
            <select name="agtype">
                <option value="agwordpress">Wordpress</option>
                <option value="agvuejs">Vue.js</option>
            </select>
            <br />
            Option du projet<br />
            <label>
                <input type="checkbox" name="agoption[]" value="contact" />
                Formulaire de contact avancé
            </label>
            <label>
                <input type="checkbox" name="agoption[]" value="mobile" />
                Adaptations mobile spécifiques
            </label>
            <label>
                <input type="checkbox" name="agoption[]" value="design" />
                Design personnalisé
            </label><br />
            <br />

            <!-- bouton qui lance l'envoi des données -->
            <input type="submit" name="valider" value="OK"/>
        </form>
    </body>

</html>