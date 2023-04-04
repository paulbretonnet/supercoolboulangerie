<?php include('head.php'); ?>
<?php include('header.php');
include('connection.php');


$id_produit = $_POST['id'];
$id_valeur =  $_POST['qt'];
$id_produit = $id_produit - 1;

?>

<body>


    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include('cart-product.php'); ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">continuer les achats</a>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total</h5>
                        <ul>

                            <li>Total <span><?php echo $produits[$id_produit]['prix']  * $id_valeur ?> €</span></li>
                        </ul>
                        <form action="checkout.php" method="post">
                            <input type="hidden" id="name" name="id_produit" value="<?php echo $produits[$id_produit]['id_produit'] ?> " />
                            <input type="hidden" id="name" name="prix" value="<?php echo $produits[$id_produit]['prix']  * $id_valeur ?> " />
                            <input class="primary-btn" type="submit" value="finaliser la commande">
                        </form>
                    </div>
                </div>
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