<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('connection.php');

$id_produit = $_POST['id_produit'];

$id_produit = $id_produit-1

?>


<body>
    
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large" src="<?php echo $produits[$id_produit]['image']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3><?php echo $produits[$id_produit]['nom']; ?></h3>

                            <div class="product__details__price"><?php echo $produits[$id_produit]['prix']; ?></div>
                            <p><?php echo $produits[$id_produit]['recap']; ?></p>
                             <form action="shoping-cart.php" method="post" >
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input id="name" name="qt" type="number" value="0">
                                    </div>
                                </div>
                            </div>
                              
                            <input type="hidden" id="name" name="id" value="<?php echo $produits[$id_produit]['id_produit']?> " />
                  
                            <input class="primary-btn" type="submit" value="commander">
                        </div> 
                        

                    </div>
                    <div class="product__details__tab__desc">
                        <p class="texte_desc"> Infomations produits</p>
                        <p><?php echo $produits[$id_produit]['description']; ?></p>
                    </div>

        </section>
   
    
    

   
    

    <?php include('footer.php'); ?>