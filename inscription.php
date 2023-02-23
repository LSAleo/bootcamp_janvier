<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database</title>
    </head>
    <body>
        <?php
        define ('DBH','mysql:host=localhost;port=3306;dbname=green_it');
        define ('USER','root');
        define ('PASSWORD', 'password');
        define('EMAIL','email');

        try {
            $pdo = new PDO(DBH, USER, PASSWORD);
            echo 'Connexion reussie.';
            } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            }
            catch(Exception $e){
           }


        if($_POST){
            $request = $pdo->prepare("INSERT INTO user (id, nom_utilisateur, mot_de_passe) VALUES (1, $identifiant, $mdp)");
        }
        ?>
    </body>
</html>