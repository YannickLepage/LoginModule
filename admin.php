<?php

//session
session_start();

//Fichiers de Config
include "config/dbConnect.inc.php";
include "config/function.php";

//Autochargement des Classes
spl_autoload_register('chargerClasse');

//instanciation de l'objet authentification
$auth = new DbAuth();

//vérification si utilisateur connecté , sinon renvoie vers la page de login.
if (!$auth->logged()) {
    header('location: login.php');
}else{
    if (!isset($_GET['admin'])) {
        $_GET['admin'] = "liste";
    }
    $admin = $_GET['admin'];


    //switcher de vue et modèles
    switch ($admin) {
        case ('liste'):
            $vue = 'liste';
            $manager = new PageManager();
            break;

        case ('ajout'):
            $vue = 'form';
            $titre = '';
            $menuText = '';
            $contenu = '';
            $id = '';
            break;

        case ('modif'):
            $vue = 'form';
            $manager = new PageManager();
            $page = $manager->read($_GET['id']);
            $titre = $page->titre();
            $menuText = $page->menuText();
            $contenu = $page->contenu();
            $id = $page->id();
            break;

        default:
            $vue = "liste";
            $manager = new PageManager();
            break;
    }
    include "view/admin/layout/top.inc.php";
    include "view/admin/$vue.inc.php";
    include "view/admin/layout/bottom.inc.php";
}