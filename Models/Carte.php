<?php

require('connexion.php');


function carte($url){
    global $bdd;
    $statement = $bdd->prepare('SELECT * FROM carte WHERE url = ?');
    $statement->execute(array($url));
    $carte = $statement->fetch();
    return $carte;
}