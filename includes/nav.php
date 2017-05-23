<?php

       $active = True;
   ?>

    <body>

        <div class="header-container">
            <header class="wrapper clearfix">
                <button class="nav-btn">
                    <span class="nav-open"><img src="./media/img/menutoggle.png" alt=""></span>
                    <span class="nav-close">&times;</span>
                </button>
                <div class="logosmall">
                    <a href="index.php"><img src="./media/img/boulderssmall.png" alt=""></a>
                </div>
                <nav id="navlarge" class="nav">
                    <!--Alternativ PHP syntax til active class fra http://php.net/manual/en/control-structures.alternative-syntax.php -->
                    <ul class="menu">
                        <li class="menu-item"><a <?php if($this_page=="om.php" ):?>class="active"<?php endif;?>  href="om.php"><? echo $city . " " ?>Boulders</a>
                        </li>
                        <li class="menu-item"><a <?php if($this_page=="praktiskinfo.php" ):?>class="active"<?php endif;?>  href="praktiskinfo.php">praktisk info</a>
                        </li>
                        <li class="menu-item"><a <?php if($this_page=="okobar.php" ):?>class="active"<?php endif;?>  href="okobar.php">øko bar</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php"><img id="logolarge" src="./media/img/logohalf.png"></a>
                        </li>
                        <li class="menu-item"><a <?php if($this_page=="medlemskab.php" ):?>class="active"<?php endif;?>  href="medlemskab.php">pris &amp; medlemskab</a>
                        </li>
                        <li class="menu-item"><a <?php if($this_page=="kalender.php" ):?>class="active"<?php endif;?>  href="kalender.php">kalender</a>
                        </li>
                        <li class="menu-item"><a <?php if($this_page=="kontakt.php" ):?>class="active"<?php endif;?>  href="kontakt.php">kontakt</a>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>