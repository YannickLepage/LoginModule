/**
 * Created by ylepage on 27/04/15.
 */

//fonction anonyme permettant l'affichage du formulaire de connexion.
$(document).ready(function(){

    var $login = $('#login');
    var $form = $('#form');

    $login.click(function(e){
        e.preventDefault();
        $form.slideToggle();
    });



})