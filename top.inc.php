<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>My CMS _ Administration</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/darkly/bootstrap.min.css">
	<link rel="stylesheet" href="view/admin/style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body class="<?= $admin ?>">

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
		<div class="collapse navbar-collapse" id="admin-menu">
			<ul class="nav navbar-nav">
				<li><a href="admin.php?admin=liste">
					<i class="glyphicon glyphicon-th-list"></i> Liste des pages
				</a></li>
				<li><a href="admin.php?admin=ajout">
					<i class="glyphicon glyphicon-plus"></i> Ajouter une page
				</a></li>
                <!-- modif pour prise en charge module de login -->
                <li><a href="ajax/deconnexion.php">
                        <i class="glyphicon glyphicon-remove-sign"></i> Déconnexion
                    </a></li>
                <!--fin modif -->

			</ul>
		</div>
	</div>
</nav>