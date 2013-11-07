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
        <!-- SCRIPTS -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
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
            </div>
        </div>
        <div class="half gray_bg">
            <div class="choise_menu gray_bg">
                WYPOŻYCZALNIA
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, libero, ullam saepe animi id fugit hic illo voluptatum. Quae, illo corporis architecto qui illum neque explicabo blanditiis provident est nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, sit aut neque? Corrupti, excepturi, a, iste ducimus culpa consectetur quae molestiae fuga dicta velit ipsum maiores qui est accusantium nesciunt. <br/><br/>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, sit, corporis, veritatis maiores odit sunt.
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
            <?php echo $content; ?>
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
</body>
</html>