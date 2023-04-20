<?php
function ajouter($texte) {
  $cnx = ouvrirConnexion();
  $texte = mysqli_real_escape_string($cnx, $texte);
  creer($cnx, "INSERT INTO tache VALUES (0, '$texte', 0, NOW(), NULL)");
}

function toutes($filtre=false) {
  $cnx = ouvrirConnexion();
  $clauseWhere = "";
  if($filtre !== false) {
    $filtre = (int)$filtre;
    $clauseWhere = " WHERE accomplie=$filtre ";
  } 
  $res = lire($cnx, "SELECT * FROM tache $clauseWhere ORDER BY date_ajout DESC");
  return $res;
}

function nombreTachesActives() {
  $cnx = ouvrirConnexion();
  $res = lireUn($cnx, "SELECT COUNT(*) AS nb FROM tache WHERE accomplie=0");
  return $res['nb'];
}

function basculer($idt) {
  $cnx = ouvrirConnexion();
  $idt = (int)$idt;
  modifier($cnx, "UPDATE tache SET accomplie=!accomplie WHERE id=$idt");
}

function retirer($idt) {
  $cnx = ouvrirConnexion();
  $idt = (int)$idt;
  modifier($cnx, "DELETE FROM tache WHERE id=$idt");
}

function retirerCompletees() {
  $cnx = ouvrirConnexion();
  modifier($cnx, "DELETE FROM tache WHERE accomplie=1");
}

