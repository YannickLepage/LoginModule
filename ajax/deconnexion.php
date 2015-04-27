<?php

//detruit la session et renvoie vers la page d'admin
session_start();

unset($_SESSION);
session_destroy();

header("location: ../admin.php");
