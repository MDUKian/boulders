<?php

include "includes/head.php";
include "includes/nav.php";
?>
    <div class="main-container">
        <div class="main wrapper clearfix">

            <article id="om">
                <header>
                    <h1>velkommen til <?php echo $city . " " ?>Boulders</h1>
                    <div class="btncontainer">
                        <a class="ctabtn" href="om.php">bliv medlem</a>
                        <a class="ctabtn" href="om.php">praktisk info</a>
                    </div>
                </header>
                <section class="landercontent third">
                    <div>
                        <img src="./media/img/klatre_ikon.png" alt="">
                        <p>Hos
                            <?php echo $city . " " ?>Boulders tilbyder vi funktionel træning i form af bouldering. Det er nemt at komme i gang - man behøver hverken udstyr eller klatreerfaring og vores dygtige og engagerede instruktører og ansatte står altid klar til at hjælpe dig godt i gang.
                                <br>Prøv det i dag!</p>
                        <div class="btncontainer third">

                            <a class="ctabtn" href="#.php">bliv medlem</a>
                        </div>

                    </div>
                    <div>
                        <img src="./media/img/kaffe_ikon.png" alt="">
                        <p>Grundværdierne hos
                            <?php echo $city . " " ?>Boulders er sundhed og økologi. Du finder derfor en økologisk bar med et stort udvalg af kaffe, the, frisk juice, frugt og delikatesser. Nyd din kaffe i vores store chillområde og få en hyggelig snak med de andre medlemmer.
                                <br>Vores kaffe skal bare prøves!</p>
                        <div class="btncontainer third">

                            <a class="ctabtn" href="okobar.php">øko bar</a>
                        </div>

                    </div>
                    <div>
                        <img src="./media/img/hjerte_ikon.png" alt="">
                        <p>Hos
                            <?php echo $city . " " ?>Boulders går vi meget op i at skabe et tæt fællesskab mellem vores medlemmer. Derfor afholder vi den første fredag i hver måned Late Night Bouldering med lækker musik, sjov klatring i alle niveauer, hyggeligt samvær og økologiske øl.
                                <br>Kom og deltag i hyggen!</p>
                        <div class="btncontainer third">

                            <a class="ctabtn" href="kalender.php">kalender</a>
                        </div>

                    </div>

                </section>
                <section>
                    <h2>følg os på instagram</h2>
                    <a href="#">@aarhusboulders</a>
                    <div class="instawidget">
                        <!-- LightWidget WIDGET FRA https://lightwidget.com/ -->
                        <script src="//lightwidget.com/widgets/lightwidget.js"></script>
                        <iframe src="//lightwidget.com/widgets/6070a75db42f5642b2de407fe83ec895.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

                    </div>
                </section>

            </article>

        </div>
        <!-- #main -->
    </div>
    <!-- #main-container -->

    <?php
include "includes/footer.php"
?>