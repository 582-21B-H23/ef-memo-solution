<?php 
require_once('lib/sql.lib.php');
require('lib/memo-modele.lib.php');

if(isset($_GET['op'])) {
  $action = $_GET['op'];
  switch ($action) {
    case 'ajouter':
      ajouter($_POST['texteTache']);
      break;
    
    case 'basculer':
      basculer($_GET['idt']);
      break;
  
    case 'supprimer':
      retirer($_GET['idt']);
      break;
    
    case 'supprimer-completees':
      retirerCompletees();
      break;
  }
}

if(isset($_GET['filtre']) && $_GET['filtre'] != 2) {
  $taches = toutes($_GET['filtre']);
}
else {
  $taches = toutes();
}

$nbTachesActives = nombreTachesActives();

function dateFormatee($date) 
{
    // Il faut configurer l'extension dans php.ini
    $formatteur = datefmt_create(
                        'fr_CA', 
                        IntlDateFormatter::FULL,
                        IntlDateFormatter::FULL,
                        "America/Toronto", 
                        IntlDateFormatter::GREGORIAN,
                        "EEEE, d MMM YYYY");
    return ucfirst(datefmt_format($formatteur, strtotime($date)));
    // setlocale(LC_TIME,"fr"); // On peut aussi spécifier l'encodage en même temps que le "locale"
    // return ucfirst(utf8_encode(strftime("%A, %e %B %Y", $date))); // Pas besoin de la fonction utf8_encode() si on a spécifié l'encode ci-dessus
}

