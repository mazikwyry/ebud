<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>Eurobud S.C.</title>
        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- STYLES -->
        <link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.less">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/logo-parade/css/smoothDivScroll.css">
        <!-- SCRIPTS -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.backstretch.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js"></script>
    </head>
  <body>
    <header>
        <?php echo $this->renderPartial('//layouts/_menu'); ?>
    </header>

    <section class="motto">
        nasze jedyne ograniczenie to<br/>
        <span style="font-size:62px;">twoja wyobraźnia</span>
    </section>

    <section class="choise">
        <div class="half ornage_bg">
            <div class="choise_menu right ornage_bg">
                BUDOWNICTWO
                <div class="hidden-submenu">
                    <ul>
                        <li>o firmie</li>
                        <li>oferta</li>
                        <li>realizacje</li>
                        <li>kariera</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="half gray_bg">
            <div class="choise_menu gray_bg">
                WYPOŻYCZALNIA
                <div class="hidden-submenu rents">
                    <ul>
                        <li>deskowania</li>
                        <li>rusztowania</li>
                        <li>sprzęt budowlany</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="cl"></div>
    <section class="content">
        <div class="con">
            <div class="diamond">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/house.png" />
            </div> 
            <div class="half align_left" style="padding-right:60px;">
                <div class="header">
                    o firmie
                </div>
                Jesteśmy firmą dla której budownictwo jest pasją, której oddajemy się bez reszty. Nie biomy się trudnych wyzwań i wymagających Inwestorów. Nasze niemałe doświadczenie w branży budowlanej gwarantuje, że każde powierzone nam zadanie zrealizujemy terminowo i z najwyższą jakością.
                <br/><br/>

            </div>
            <div class="half align_left" style="padding-left:115px;">
                <div class="header">
                    kontakt
                </div>
                <div class="two-in-row">
                    <input type="text" placeholder="Imię" class="left" id="name" />
                    <input type="text" placeholder="E-mail"  class="right" id="email" />
                </div>
                <textarea placeholder="Twoja wiadomość" id="message"></textarea>
                <input type="submit" value="WYŚLIJ" />

            </div>
            <div class="cl"></div>
        </div>
        <div class="big-info mission" name="ofirmie" id="ofirmie">
            <div class="con">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/cel.png" />
                <div class="big-content">
                    <div class="title">Nasza misja</div>
                    <div class="shot">Misją firmy stało się <strong>stworzenie wiarygodnego i solidnego partnera dla realizacji celów inwestycyjnych</strong>. Osiągamy powyższy cel poprzez dbanie o konkurencyjność, utrzymywanie stałych relacji z Inwestorami oraz poprzez fachowe doradztwo i wykonawstwo.</div>
                </div>
                <div class="cl"></div>
            </div>
        </div>
        <div class="big-info team">
            <div class="con">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/team.png" />
                <div class="big-content">
                    <div class="title">Zespół</div>
                    <div class="shot">Obecnie zatrudniamy <strong>29 osób o wysokich kwalifikacjach zawodowych</strong> popartych solidną wiedzą i doświadczeniem. Ponadto współpracujemy ze sprawdzoną grupą podwykonawców i dostawców.</div>
                </div>
                <div class="cl"></div>
            </div>
        </div>
        <div class="recent-news">
            <div class="con">
                <div class="news-header">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/news.png" />
                    aktualności
                </div>

                <?php echo $content; ?>
                <div class="cl"></div>

            </div>
        </div>
        <div class="con" style="margin:40px auto; overflow:hidden;">
            <div class="parter-logos" id="logoParade">
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/mera.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/doka.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/mera.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/doka.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/mera.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/doka.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/mera.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/doka.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/mera.png" /></a>
                <a href="http://mera-tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/doka.png" /></a>
            </div>
        </div>
    </section>
    <div class="cl"></div>
    <footer>
        <div class="con">
            <div class="left">
                <nav>
                    <div class="column left">
                        <div class="nav-header">
                            budownictwo
                        </div>
                        <ul>
                            <li><a>oferta</a></li>
                            <li><a>aktualności</a></li>
                            <li><a>realizacje</a></li>
                            <li><a>partnerzy</a></li>
                            <li><a>kariera</a></li>
                        </ul>
                    </div>
                    <div class="column left">
                        <div class="nav-header">
                            wypożyczalnia
                        </div>
                        <ul>
                            <li><a>deskowania</a></li>
                            <li><a>rusztowania</a></li>
                            <li><a>inne</a></li>
                            <li><a>sprzedaż akcesoriów</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="right contact">
                EUROBUD S.C.<br/>
                Przemysowa 66<br/>
                43-174 Tychy<br/>
                <a href="mailto:info@eurobud.tychy.pl">info@eurobud.tychy.pl</a>
            </div>

        </div>
        <div class="cl"></div>
    </footer>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/logo-parade/js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/logo-parade/js/jquery.kinetic.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/logo-parade/js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#logoParade").smoothDivScroll({ 
                autoScrollingMode: "onStart", 
                autoScrollingDirection: "endlessLoopRight", 
                autoScrollingStep: 1, 
                autoScrollingInterval: 30,
                manualContinuousScrolling: true, 
                mousewheelScrolling: "allDirections",
                hotSpotScrollingInterval: 5,
                hotSpotScrollingStep: 2,
            });

            // Logo parade event handlers
            $("#logoParade").bind("mouseover", function() {
                $(this).smoothDivScroll("stopAutoScrolling");
            }).bind("mouseout", function() {
                $(this).smoothDivScroll("startAutoScrolling");
            });

        //     $("body").backstretch([
        //           "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg.jpg"
        //         , "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg2.jpg"
        //         , "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg3.jpg"
        //         , "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg4.jpg"
        //         , "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg5.jpg"
        //     ], {duration: 3000, fade: 2000}
        // );
         });
    </script>
</body>
</html>