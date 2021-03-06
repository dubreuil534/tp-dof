<?php


if(!empty($_SESSION["user"])) {
       $user = $_SESSION["user"];
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Bienvenue à Who\'s Next </title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="sss/sss.min.js"></script>
    <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        jQuery(function($) {
            $('.slider').sss();
        });
    </script>
</head>
<body>
<!-- Affiche le header des pages -->
<header>
    <nav id="menu" class="navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Barre de menu -->
                <img class="navbar-brand" src="images/Logo_projet.gif" alt="Mountain View" style="width:50px;height:50px;">
                <a class="navbar-brand" href="index.php">Who's Next</a>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Acceuil <span class="sr-only">(current)</span></a></li>
                    <li><a href="Chat.php">Chat</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <!-- Formulaire de  Login -->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><?php echo !empty($_SESSION["user"])?"Bienvenue":"";?>  <strong style="font-style:italic"><?php echo !empty($_SESSION["user"])?$user->username:"";?></strong></a></li>
                    <li><a href="inscription.php"><?php echo empty($_SESSION["user"])?"S'inscrire":"";?></a></li>
                    <li><a href="Deconnecter.php"><?php echo !empty($_SESSION["user"])?"Deconnexion":"";?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <img id="profil_pic_dropdown" src="images/<?php  echo !empty($_SESSION["user"])?$user->username:"Logo_projet.gif";?>.jpg" alt='Photo profil' style='width:120px;height:120px;'>
                            <li><a href="profil.php"> Modifier le profil </a></li>
                            <li><a href="#"> reference </a></li>
                            <li><a href="#"> Option général </a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header"> Sous menu </li>
                            <li><a href="<?php echo empty($_SESSION["user"])?"alerte.php":"Deconnecter.php";?>"> Déconnexion </a></li>
                        </ul>
                    </li>
                        </ul>

                <?php if(empty($_SESSION["user"])){ ?>
                    <form class="navbar-form navbar-right" method="post" id="loginForm" action="Connecter.php">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email"
                                   value="" class="form-control " />
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" placeholder="Password"
                                   value=""
                                   class="form-control " />
                        </div>
                        <button id="login_btn" type="submit" name="submit_login" class="btn btn-primary">Connexion</button>
                    </form>
                <?php } ?>

                <ul class="nav navbar-nav navbar-right">
                    <li><a id="errAuth" class="red" style="cursor:default" href="#"></a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>