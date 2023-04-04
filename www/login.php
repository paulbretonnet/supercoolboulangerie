<?php include('head.php'); ?>
<?php
include('header.php');

include("infos.php");
@$valider = $_POST["valider"];
$erreur = "";
if (isset($valider)) {
    include("connexion.php");
    $verify = $pdo->prepare("select * from users where pseudo=? and password=? limit 1");
    $verify->execute(array($pseudo, $password));
    $user = $verify->fetchAll();
    if (count($user) > 0) {
        $_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
            " " . strtoupper($user[0]["nom"]);
        $_SESSION["connecter"] = "yes";
    } else
        $erreur = "Mauvais login ou mot de passe!";
}
?>

<body onLoad="document.fo.login.focus()">
    <div class="login-block">
        <h1>Login</h1>
        <form name="form" method="post" action="">
            <input type="text" name="pseudo" placeholder="Votre Pseudo" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <input class="primary-btn" type="submit" name="valider" value="S'authentifier" />
            <a href="inscription.php">Créer votre Compte</a>
    </div>
</body>


<?php include('footer.php'); ?>