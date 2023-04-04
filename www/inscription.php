<?php
include('head.php');
include('header.php');
include("infos.php");

// Initialisation des variables
$nom = $prenom = $pseudo = $password = $passwordConf = "";
$erreur = "";

// Récupération des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $pseudo = $_POST["pseudo"];
    $password = $_POST["password"];
    $passwordConf = $_POST["passconf"];

    // Vérification des champs obligatoires
    if (empty($nom)) $erreur = "Le champ nom est obligatoire!";
    elseif (empty($prenom)) $erreur = "Le champ prénom est obligatoire!";
    elseif (empty($pseudo)) $erreur = "Le champ pseudo est obligatoire!";
    elseif (empty($password)) $erreur = "Le champ mot de passe est obligatoire!";
    elseif ($password != $passwordConf) $erreur = "Mots de passe différents!";
    else {
        // Vérification que le pseudo n'existe pas déjà
        include("connexion.php");
        $verify_pseudo = $pdo->prepare("select id from users where pseudo=? limit 1");
        $verify_pseudo->execute(array($pseudo));
        $user_pseudo = $verify_pseudo->fetchAll();
        if (count($user_pseudo) > 0)
            $erreur = "Pseudo existe déjà!";
        else {
            // Insertion des données dans la base de données
            $ins = $pdo->prepare("insert into users(nom,prenom,pseudo,password) values(?,?,?,?)");
            $ins->execute(array($nom, $prenom, $pseudo, $password));
            $erreur = "Inscription réussie!";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="erreur"><?php echo $erreur ?></div>
    <div class="login-block">
        <form name="fo" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="nom" placeholder="Nom" value="<?= $nom ?>" /><br />
            <input type="text" name="prenom" placeholder="Prénom" value="<?= $prenom ?>" /><br />
            <input type="text" name="pseudo" placeholder="Votre Pseudo" value="<?= $pseudo ?>" /><br />
            <input type="password" name="password" placeholder="Mot de passe" /><br />
            <input type="password" name="passconf" placeholder="Confirmer votre Mot de passe" /><br />
            <input type="submit" name="inscrire" value="S'inscrire" />
            <a href="login.php">Déjà un compte</a>
        </form>
    </div>
</body>

</html>
<?php include('footer.php'); ?>