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
$navPages["index.php"] = "Velkommen til Boulders: Danmarks fedeste klatrested!";

foreach($navPages as $url=>$title){
if($url === $this_page){
    $metatitle = $title;
}

} 

$aarfb = "https://www.facebook.com/aarhusboulders/";
$aarinsta = "https://www.instagram.com/aarhusboulders/";
$aarta = "https://www.tripadvisor.dk/Attraction_Review-g189530-d10387979-Reviews-Aarhus_Boulders-Aarhus_East_Jutland_Jutland.html";
$cphfb = "https://www.facebook.com/copenhagenboulders/";
$cphinsta = "https://www.instagram.com/cphboulders/";
$cphta = "https://www.tripadvisor.dk/Attraction_Review-g189541-d10454283-Reviews-Copenhagen_Boulders-Copenhagen_Zealand.html";

?>
    <!doctype html>
    <html class="no-js" lang="en" <?php if($this_page=="index.php" ):?>id="bgfallback"
    <?php endif;?>>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="Keywords" content="klatring, bouldering, klatreudstyr, økologi, funktionel træning, hyggelig træning">
            <title>
                <?php echo $metatitle; ?>
            </title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="apple-touch-icon" href="apple-touch-icon.png">

            <link rel="stylesheet" href="css/normalize.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Oswald|Quicksand:300" rel="stylesheet">

            <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        </head>