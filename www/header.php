<header class="header_section">


  <div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.php">
        <span>
          super cool boulangerie

        </span>
      </a>



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mx-auto ">
          <p class="login-bjr"><?php echo  $_SESSION["prenom_nom"]; ?></p>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <div class="user_option">
            <a href="login.php" class="user_link">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>




          </div>
      </div>
    </nav>
  </div>
</header>