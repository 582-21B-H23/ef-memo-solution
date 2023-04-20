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