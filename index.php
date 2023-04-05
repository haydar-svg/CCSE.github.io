<?php
include_once('CONTROLLERS/controllers.php');
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$base_url = '/CCSE/';
switch ($url):
    case ($base_url):
        header("Location:./index.php/");
        break;
    case ($base_url . 'index.php'):
        header("Location:./index.php/");
        break;
    case ($base_url . 'index.php/'):
        CCSE();
        break;
    case ($base_url . 'index.php/index'):
        CCSE();
        break;
    case ($base_url . 'index.php/CCSE'):
        CCSE();
        break;
    case ($base_url . 'index.php/ccse'):
        CCSE();
        break;
    case ($base_url . 'index.php/COACHING'):
        COACHING();
        break;
    case ($base_url . 'index.php/CONSEIL'):
        CONSEIL();
        break;
    case ($base_url . 'index.php/FORMATION'):
        FORMATION();
        break;
    case ($base_url . 'index.php/GRH'):
        GRH();
        break;
    case ($base_url . 'index.php/IF'):
        INFO();
        break;
    case ($base_url . 'index.php/JURIDIQUE'):
        JURIDIQUE();
        break;
    case ($base_url . 'index.php/EVENTS'):
        EVENTS();
        break;
    case ($base_url . 'index.php/RESERVATION'):
        RESERVATION();
        break;
    case ($base_url . 'index.php/MESSAGES'):
        MESSAGES();
        break;
    default:
        header("Location:./index");
        break;
endswitch;
