<?php

$recherche = filter_input(INPUT_GET, 'recherche', FILTER_SANITIZE_SPECIAL_CHARS);
$lesProduits = $pdo->getListeProduits($recherche);
$title = 'Recherche : '.$recherche;
include './vues/v_listeProduits.php';