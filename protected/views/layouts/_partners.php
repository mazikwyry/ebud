<div class="con" style="padding:40px 0;">
    <div class="parter-logos" id="logoParade">
        <a target="_blank" href="http://mera.tychy.pl"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/mera.png" /></a>
        <a target="_blank" href="http://www.doka.com/web/home/index.pl.php?startPageLanguage=PL"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/doka.png" /></a>
        <a target="_blank" href="http://www.fargosystems.pl/fargo-systembau/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/fagro.png" /></a>
        <a target="_blank" href="http://www.instalbud.pl/new/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/instalbud.png" /></a>
        <a target="_blank" href="http://www.pressglass.eu/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/pressglass.png" /></a>
        <a target="_blank" href="http://sewera.pl/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/sewera.png" /></a>
        <a target="_blank" href="http://www.unimet.tychy.pl/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/partners/unimet.png" /></a>
    </div>
</div>

<div class="cl"></div>

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
     });
</script>