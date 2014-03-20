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
        <?php if(false){ ?>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <?php } ?>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.backstretch.min.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-48199012-1', 'eurobud.tychy.pl');
          ga('send', 'pageview');

        </script>
    </head>
  <body name="top" id="top">
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
                        <li href="<?php echo Yii::app()->request->baseUrl ?>/#ofirmie" class="special_link" rel="#ofirmie">o firmie</li>
                        <li><?php echo CHtml::link("oferta", Yii::app()->createUrl('site/oferta')) ?></li>
                        <li><?php echo CHtml::link("realizacje", Yii::app()->createUrl('projectsCat/index')) ?></li>
                        <li><?php echo CHtml::link("kariera", Yii::app()->createUrl('career/index')) ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="half gray_bg">
            <div class="choise_menu gray_bg">
                WYPOŻYCZALNIA
                <div class="hidden-submenu rents">
                    <ul>
                        <li><?php echo CHtml::link("deskowania", Yii::app()->createUrl('rent/index', array("tab"=>"deskowania"))) ?></li>
                        <li><?php echo CHtml::link("rusztowania", Yii::app()->createUrl('rent/index', array("tab"=>"rusztowania"))) ?></li>
                        <li><?php echo CHtml::link("sprzęt budowlany", Yii::app()->createUrl('rent/index')) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="cl"></div>
    <section class="content">
        <?php echo $content; ?>
    </section>
    <div class="cl"></div>
    <footer>
        <?php echo $this->renderPartial('//layouts/_bottom'); ?>
    </footer>
</body>
</html>

<script type="text/javascript">
    jQuery.backstretch([
      "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg.jpg"
    , "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg2.jpg"
    , "<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/bg3.jpg"
  ], {duration: 10000, fade: 1500, centeredY: false});
</script>