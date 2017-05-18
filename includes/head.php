<?php
$varUrl = $_SERVER[ 'PHP_SELF' ];
$url_array = explode( "/", $varUrl );
$count_array = count( $url_array );
$this_page = $url_array[ $count_array - 1 ];
$city = "Aarhus";

 $navPages = array();
$navPages["om.php"] = "Generelt om " . $city . " Boulders";
$navPages["praktiskinfo.php"] = "Praktisk Info - " . $city . " Boulders";
$navPages["okobar.php"] = "Den økologiske bar - " . $city . " Boulders";
$navPages["medlemskab.php"] = "Pris &amp; Medlemskab - " . $city . " Boulders";
$navPages["kalender.php"] = "Kommende events for " . $city . " Boulders";
$navPages["kontakt.php"] = "Kontakt os her i " . $city . " Boulders";

foreach($navPages as $url=>$title){
if($url === $this_page){
    $metatitle = $title;
}
        
}
/*
$aarfb = 
$aarinsta = 
$cphfb = 
$cphinsta = 
*/
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $metatitle; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald|Quicksand:300" rel="stylesheet">


        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>