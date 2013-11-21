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
                <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/logo-parade/css/smoothDivScroll.css">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox.css" rel="stylesheet" />
        <!-- SCRIPTS -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js" type="text/javascript"></script>
        <?php if($this->loadJQuery==true){ ?>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <?php } ?>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropzone.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox-2.6.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/tiny_mce/tinymce.min.js" ></script >
    </head>
  <body>
    <header>
        <?php echo $this->renderPartial('//layouts/_menu'); ?>
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
 </section>
    <div class="cl"></div>

        <?php echo $content; ?>

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