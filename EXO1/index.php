<?php
$uri = $_SERVER["REQUEST_URI"];

switch ($uri) {
    case "/": require("controllers/index.php");
    break;
    case "/doctors": require("controllers/doctors.php");
    break;
    case "/services": require("controllers/services.php");
    break;
    case "/blog-single": require("controllers/blog-single.php");
    break;
    case "/news-single": require("controllers/news-single.php");
    break;
    case "/contact-us": require("controllers/contact.php");
    break;
    default: require("views/404.php");
}