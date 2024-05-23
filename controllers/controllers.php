<?php
if ( isset( $_GET["path"] ) ) {

    switch ( $_GET["path"] ) {
        case "home":
        $PageName = "Inicio";
        $PageLocation = "pages/home.php";
        break;
        case "contact":
        $PageName = "Contacto";
        $PageLocation = "pages/contact.php";
        break;
        default:
        $PageName = "Página no encontrada";
        $PageLocation = "pages/404.php";
    }
} else {
    $PageName = "Inicio";
    $PageLocation = "pages/home.php";
}
$FBLink = "https://www.facebook.com/Recicladora-Torres-106654241681198/";
$TWLink = "https://twitter.com/";
$WALink = "https://api.whatsapp.com/send?phone=593991286121";
$PHLink = "tel:+593991286121";
$PHLink2 = "tel:+593990668364";
$PHLink3 = "tel:+593981990499";
$IGLink = "https://www.instagram.com/";
$YTLink  = "https://www.youtube.com/";
$ELink = "mailto:info@recicladoratorres.com";