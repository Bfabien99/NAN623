<?php
$uri = $_SERVER["REQUEST_URI"];

switch ($uri) {
    case "/": require("controllers/indexController.php");
    break;
    case "/doctors": require("controllers/doctorsController.php");
    break;
    case "/services": require("controllers/servicesController.php");
    break;
    case "/blog-single": require("controllers/blog-singleController.php");
    break;
    case "/news-single": require("controllers/news-singleController.php");
    break;
    case "/contact-us": require("controllers/contactController.php");
    break;
    default: require("views/404.php");
}