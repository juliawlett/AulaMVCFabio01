<?php 
// Passo para rodar o Compuser -> Composer init -> Preenche: 
// -> Package name (<vendor>/<name>) [julia/mvc_php2]: 
// ->Description []: Projeto de revisão sobre uso do componser em projeto MVC
// ->Author [n to skip]: Julia Leticia 
// ->Minimum Stability []: alpha
// ->Package Type (e.g. library, project, metapackage, composer-plugin) []: project
// ->License []: mit

// Responda as questões: 
// -> no
// -> no
// -> yes
// -> (pasta)

// Startar o projeto pelo terminal
// -> cd public
// -> php -S localhost:8080

require_once(dirname(__DIR__, 1). '/vendor/autoload.php');


// OPÇÃO 01
use App\Route;
$route = new Route();

// echo "isso está funcionando perfeitamente";
// echo '<hr>';
// echo '<pre>';
// print_r($route->getUrl());
// print_r($route->getRoutes());


// // OPÇÃO 02
// $route = new \App\Route();






?>