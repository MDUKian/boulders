<?php

include "includes/head.php";
include "includes/nav.php";
?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article id="kontakt">
                    <header>
                        <h1>kontakt</h1>
                        <div class="btncontainer">
                      <a class="ctabtn" href="#">bliv medlem</a>
                      <a class="ctabtn" href="praktiskinfo.php">praktisk info</a>          
                      </div>                   </header>
                    <section>
                    <div>
                        <h2>spørgsmål</h2>
                        <p>
                        Har du spørgsmål vedrørende dit medlemskab og dine betalinger, ønsker du at stille dit medlemskab i bero, at skifte til et andet eller måske noget helt tredje? Så send os en besked eller ring på:
                        </p>
                        <h5>Tlf.: +45 40 955 254</h5>
                        </div>
                        <div>
                            <h2>send os en besked</h2>

                        </div>
                    </section>
                    <section>
                        <h2>find os her!</h2>
                        <?php if($city == "Copenhagen"):?><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2251.7272755145164!2d12.536574816229827!3d55.64155848052372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465254847eb8fdfb%3A0x85bfd340b2647781!2sCopenhagen+Boulders+Aps!5e0!3m2!1sda!2sdk!4v1495117285453" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe><?php endif;?>
 <?php if($city == "Aarhus"):?><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2219.219668245671!2d10.179500316247397!3d56.20516298067673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c158a3a4c238f%3A0x8b2eb18a435d74cf!2sAarhus+Boulders!5e0!3m2!1sda!2sdk!4v1495116999389" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe><?php endif;?>
                    </section>
                </article>



            </div> <!-- #main -->
        </div> <!-- #main-container -->

  <?php
include "includes/footer.php"
?>