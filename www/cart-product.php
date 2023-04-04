<tr>
    <td class="shoping__cart__item">
        <img src="img/cart/cart-1.jpg" alt="">
        <h5><?php echo $produits[$id_produit]['nom']; ?></h5>
    </td>
    <td class="shoping__cart__price">
    <?php echo $produits[$id_produit]['prix']; ?>€
    </td>
    <td class="shoping__cart__quantity">
        <div class="quantity">
            <div class="pro-qty">
                 <?php echo $_POST['qt']; ?> 
            </div>
        </div>
    </td>
    <td class="shoping__cart__total">
        €
    </td>
                                    
</tr>