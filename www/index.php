
<?php include('head.php'); ?>
<?php
include('header.php'); 


if ($_SESSION["connecter"] != "yes") {
    header("location:login.php");
    exit();
}

    $bienvenue = "Bonsoir et bienvenue " .
        $_SESSION["prenom_nom"];



//if ($_SESSION["prenom_nom"] == "Owner BOULANGERIE") {?>

      <!-- <a class="primary-btn" href="commandes.php" >voir les commandes a realiser</a> -->
 <?php
      //}
       //?>



<body>
  <a href="test.php"></a>
  <div class="hero_area">
    <div class="bg-box">
      <img src="images/pain_cover.png" alt="">
    </div>
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php include('caroussel-item.php'); ?>

          
        </div>


    </section>
  </div>
  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nos produits
        </h2>
      </div>

        <!-- <ul class="filters_menu">
          <li class="active" data-filter="*">All</li>
          <li data-filter=".vienoiserie">Vienoiserie</li>
          <li data-filter=".pain">Baguette</li>
          <li data-filter=".patisserie">Patisserrie</li>

        </ul> -->
      
      <div class="filters-content">
        <div class="row grid">
        
        <?php include('product_card.php'); ?>
        
        
        </div>
      </div>
      
    </div>
  </section>


  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/plop.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                nous sommes super cool boulangerie
              </h2>
            </div>
            <p class="soustitre">
            Penser afin de ravitailler les grandes surfaces de produit de qualité le projet super-cool boulangerie est le fruit du savoir-faire de toute une équipe de boulangers pâtissiers qui ont reussi à automatiser la création se met de qualité sans perdre de douceur ou de croustillant tout cela pour atteindre un but, pouvoir manger du vrai pain dans des supermarchés
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include('footer.php'); ?>
<script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>