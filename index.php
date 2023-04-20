<?php
	require('lib/memo-controleur.lib.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&amp;family=Roboto:wght@400;700&amp;display=swap"
		rel="stylesheet">
	<link rel="icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Memo - liste de tâches à compléter. Prototype d'application PHP/MySQL (examen final du cours 582-21B à l'hiver 2023)">
	<title>Memo - liste de tâches à compléter</title>
	<link href="ressources/css/styles.css" rel="stylesheet">
	<link rel="icon" href="ressources/images/favicon.ico">
</head>

<body>
	<div id="racine">
		<div class="Appli">
			<header class="appli-entete">
				<img
					src="ressources/images/memo-logo.png"
					class="appli-logo" alt="Memo">
			</header>
			<section class="AjoutTache">
				<form action="index.php?op=ajouter" method="post">
					<input type="text" placeholder="Ajoutez une tâche ..." name="texteTache" autocomplete="off" autofocus>
					<button type="submit" class="btn-ajout-tache">></button>
				</form>
			</section>
			<section class="Taches">
				<?php if(count($taches) == 0) : ?>
				<div class="msg-aucune-tache">
					<span class="emoji-anime">💃</span>
					Rien à afficher
					<span class="emoji-anime">🕺</span>
				</div>
				<?php endif; ?>
				
				<?php foreach($taches as $tache) : ?>
				<div class="Tache<?= $tache['accomplie'] ? ' completee' : ''; ?>">
					<a class="basculer" href="index.php?op=basculer&idt=<?= $tache['id']; ?>">&#x2713;</a>
					<div class="infoTache">
						<span class="texte"><?= $tache['texte']; ?></span>
						<span class="date">(<?= $tache['date_ajout']; ?>)</span>
					</div>
					<a class="supprimer" href="index.php?op=supprimer&idt=<?= $tache['id']; ?>">&#x2212;</a>
				</div>
				<?php endforeach; ?>
			</section>
			<footer class="Controle">
				<div class="filtres">
					<a class="btn<?= (!isset($_GET['filtre']) || $_GET['filtre']==2) ? ' actif': ''; ?>" href="index.php?filtre=2">Toutes</a>
					<a class="btn<?= (isset($_GET['filtre']) && $_GET['filtre']==1) ? ' actif': ''; ?>" href="index.php?filtre=1">Complétées</a>
					<a class="btn<?= (isset($_GET['filtre']) && $_GET['filtre']==0) ? ' actif': ''; ?>" href="index.php?filtre=0">Actives</a>
				</div>
				<span class="compte"><?= $nbTachesActives . " " . ($nbTachesActives!=1 ? "tâches actives" : "tâche active") ?></span>
				<div class="supprimer-completees">
					<a 
						class="btn" 
						href="index.php?op=supprimer-completees" 
						title="Supprimer toutes les tâches complétées"
					>
						Supprimer complétées
					</a>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>