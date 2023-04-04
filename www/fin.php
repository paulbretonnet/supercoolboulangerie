<?php include('head.php'); ?>
<?php include('header.php') ?>

<div class="login-block_fin">
    <p class="fin">votre commande a bien été prise en compte</p>
    <a class="btn_fin" href="index.php">retour a la boutique</a>

</div>


<?php

if (isset($_POST['envoyer'])) {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['mail']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $ville = htmlspecialchars($_POST['ville']);
    $prix = htmlspecialchars($_POST['prix']);

    // Connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "boulangerie";
    $nom_base_de_donnees = "supercoolboulangerie";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", $utilisateur, $mot_de_passe);

        // Configuration des options de PDO
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparation et exécution de la requête SQL
        $requete = $connexion->prepare("INSERT INTO commande (nom, mail, prenom, telephone, adresse, code_postal, ville, prix) VALUES (:nom, :mail, :adresse, :prenom, :telephone, :code_postal, :ville, :prix)");

        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':mail', $mail);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':telephone', $telephone);
        $requete->bindParam(':adresse', $adresse);
        $requete->bindParam(':code_postal', $code_postal);
        $requete->bindParam(':ville', $ville);
        $requete->bindParam(':prix', $prix);


        $requete->execute();

        echo "Les données ont été insérées avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'insertion des données: " . $e->getMessage();
    }

    // Fermeture de la connexion
    $connexion = null;
}

?>


<?php include('footer.php'); ?>