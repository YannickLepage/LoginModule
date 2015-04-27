<?php

function chargerClasse($classe)
{
	$classFile = "controller/$classe.php";
	if(file_exists($classFile)){
		include $classFile;
    }else{
        $classFile = "authentification/$classe.php";
        if(file_exists($classFile)){
            include $classFile;
        }else{
            include "model/$classe.php";
        }
	}
   // On inclut la classe correspondante au paramètre passé.
}

function chargerClasseAjax($classe)
{
	$classFile = "../controller/$classe.php";
	if(file_exists($classFile)){
		include $classFile;
	}else{
		include "../model/$classe.php";
	}
   // On inclut la classe correspondante au paramètre passé.
}
