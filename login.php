<?php

//session
session_start();

//Fichiers de Config
include "config/dbConnect.inc.php";
include "config/function.php";

//Autochargement des Classes
spl_autoload_register('chargerClasse');

/*si des données ont été postés, on teste la connexion. Si ok on renvoie vers
l'admin sinon on affiche une erreur*/
if(!empty($_POST)){
    $auth = new DbAuth();
    if($auth->login($_POST['username'], $_POST['password'])){
        header('location:admin.php');
    }else{
        $idFalse ='<div class="alert alert-danger">Identifiants incorrects</div>';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyCms - Login</title>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>My CMS _ Administration</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/darkly/bootstrap.min.css">
        <link rel="stylesheet" href="view/admin/style/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">My CMS _ Administration</a>
            </div>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1><a id="login" href="#">Se connecter</a></h1>
        </div>
    </div>
    <br>
    <?php if(isset($idFalse)) echo $idFalse; ?>
    <form action="#" method="post" id="form" class="form-group" style="display:none">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <input class="form-control" type="text" placeholder="Username" name="username">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <input  class="form-control"type="password" placeholder="Password" name="password">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 col-md-offset-5 text-center">
                <button class="btn btn-primary form-control">Envoyer</button>
            </div>
        </div>
    </form>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="ajax/login.js"></script>
    </body>
</html>