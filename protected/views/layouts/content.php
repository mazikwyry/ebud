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
         <link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dropzone.css">
        <!-- SCRIPTS -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropzone.js">
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js"></script>
    </head>
  <body>
    <header>
        <nav>
         <div class="con">
         <ul>
            <li class="sub-trigger">o firmie</li>
            <li>oferta</li>
            <li>realizacje</li>
            <li class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/logo.png" /></li>
            <li>wypożyczalnia</li>
            <li>kontakt</li>
         </ul>
            
         </div>
        </nav>
        <div class="sub-menu">
            <div class="con">
                <ul>
                    <li>zespól</li>
                    <li>historia</li>
                    <li>referencje</li>
                </ul>
            </div>
        </div>
    </header>

    <section class="choise sub-page">
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
        <div class="con align_left">
            <?php echo $content; ?>
            <div class="cl"></div>
            
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