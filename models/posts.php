<?php

require_once('database.php');

/** Doit contenir les méthodes pour  traiter les postes.
 * Rappel : Le modèle fait appel à la base de données.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */

function getPost(){
    $mypdo = initDatabse();
    return $mypdo->query('Select * From posts;');
}