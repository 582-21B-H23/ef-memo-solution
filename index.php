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
				<form action="index.php" method="post">
					<input type="text" placeholder="Ajoutez une tâche ..." name="texteTache" autocomplete="off">
					<button type="submit" class="btn-ajout-tache">></button>
				</form>
			</section>
			<section class="Taches">
				<!-- Si aucune tâche, afficher le prochain DIV -->
				<!-- 
				<div class="msg-aucune-tache">
					<span class="emoji-anime">💃</span>
					Wouhou, rien à faire !
					<span class="emoji-anime">🕺</span>
				</div>
				-->

				<!-- Sinon, afficher les tâches suivant le gabarit ci-dessous -->
				<!-- Remarquez la classe indiquant une tâche complétée -->
				<div class="Tache completee">
					<a class="basculer" href="index.php?op=basculer&idt=20">&#x2713;</a>
					<div class="infoTache">
						<span class="texte">Finir le TP#2</span>
						<span class="date">(19 avril 2023 à 20:52:23)</span>
					</div>
					<a class="supprimer" href="index.php?op=supprimer&idt=20">&#x2212;</a>
				</div>
				<div class="Tache">
					<a class="basculer" href="index.php?op=basculer&idt=12">&#x2713;</a>
					<div class="infoTache">
						<span class="texte">Voir Il grande silenzio</span>
						<span class="date">(15 avril 2023 à 17:05:02)</span>
					</div>
					<a class="supprimer" href="index.php?op=supprimer&idt=12">&#x2212;</a>
				</div>
				<div class="Tache">
					<a class="basculer" href="index.php?op=basculer&idt=1">&#x2713;</a>
					<div class="infoTache">
						<span class="texte">Faire mon rapport d'impôts</span>
						<span class="date">(22 février 2023 à 12:31:50)</span>
					</div>
					<a class="supprimer" href="index.php?op=supprimer&idt=1">&#x2212;</a>
				</div>
			</section>
			<footer class="Controle">
				<div class="filtres">
					<a class="btn actif" href="#">Toutes</a>
					<a class="btn" href="#">Complétées</a>
					<a class="btn" href="#">Actives</a>
				</div>
				<span class="compte">2 tâches actives</span>
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