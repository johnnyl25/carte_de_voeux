<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
}
require('Models/Carte.php');

$carte = carte($url);

require('Views/CarteView.php');
