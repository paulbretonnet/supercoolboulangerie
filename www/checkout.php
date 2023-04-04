<?php include('head.php'); ?>
<?php include('header.php');
include('connection.php');

$prix =  $_POST['prix'];




?>

<body>
    <section class="checkout spad">
        <div class="container">

            <div class="checkout__form">
                <h4>detail de la facture</h4>
                <form method='post' action="fin.php">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Prenom<span>*</span></p>
                                        <input type="text" id="name" name="prenom">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nom<span>*</span></p>
                                        <input type="text" id="name" name="nom">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Addresse<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" id="name" name="adresse">
                            </div>
                            <div class="checkout__input">
                                <p>ville<span>*</span></p>
                                <input type="text" id="name" name="ville">
                            </div>
                            <div class="checkout__input">
                                <p>code postal<span>*</span></p>
                                <input type="text" id="name" name="code_postal">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telephone<span>*</span></p>
                                        <input type="text" id="name" name="telephone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" id="name" name="mail">

                                    </div>
                                    <div>
                                        <input type="hidden" id="name" name="prix" value="<?php echo $prix ?>">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>votre commande</h4>
                                <div class="checkout__order__products">produit <span>Total</span></div>

                                <div class="checkout__order__subtotal">total <span><?php echo $prix ?>€</span></span></div>

                                <div class="checkout__input__checkbox">
                                </div>
                                <p>merci de nous faire confiance pour vos achats</p>
                                <div class="checkout__input__checkbox">

                                </div>






                                <button class="primary-btn" type="submit" name="envoyer" value="Envoyer">valider la commande</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>






</body>

<?php include('footer.php'); ?>