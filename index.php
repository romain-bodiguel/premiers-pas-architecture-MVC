<?php
require_once __DIR__ . '/controllers/MainController.php';

// var_dump($_GET);

$pages = [
    '/'  => 'homeAction',
    '/home'  => 'homeAction',
    '/products' => 'productsAction',
    '/store' => 'storeAction',
    '/about' => 'aboutAction'
];

// Condition Ternaire (pas besoin se mémoriser): 
// question? si oui: si non;
$pageToShow = isset($_GET['_url'])? $_GET['_url']: '/home';

// Si notre tableau de pages contient la page à  afficher
if($pages[$pageToShow]) {

    $controller = new MainController();

    // On récupère le nom de la méthode
    $methodToCall = $pages[$pageToShow];

    // On appelle la méthode 
    // PHP modifie d'abord la variable $methodToCall puis utilise l'action
    $controller->$methodToCall();
} else {
    echo 'page 404';
}
