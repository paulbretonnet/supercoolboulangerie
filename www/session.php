<?php
 

?>
 
<!DOCTYPE  html>
<html>
<head>
    <meta charset="utf-8"/>
    <style>
        * {
            font-family: arial;
        }
 
        body {
            margin: 20px;
        }
 
        h2 {
            text-align: center;
            color: pink;
        }
 
        a {
            color: blue;
            text-decoration: none;
            float: right;
        }
 
        a:hover {
            text-decoration: underline;
        }
 
    </style>
</head>
<body onLoad="document.fo.login.focus()">
<h2><?php echo $bienvenue ?></h2>
<a href="deconnexion.php">Se déconnecter</a>
</body>
</html>