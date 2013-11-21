<nav>
 <div class="con">
 <ul>
    <li><a href="<?php echo Yii::app()->request->baseUrl ?>/#ofirmie" class="special_link" rel="#ofirmie">o firmie</a></li>
    <li><?php echo CHtml::link("oferta", Yii::app()->createUrl('site/oferta')) ?></li>
    <li><?php echo CHtml::link("realizacje", Yii::app()->createUrl('projectsCat/index')) ?></li>
    <li class="logo"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/gfx/logo.png"), Yii::app()->request->baseUrl."/",array("rel"=>"#top","class"=>"special_link")) ?></li>
    <li>wypożyczalnia</li>
    <li><?php echo CHtml::link("kontakt", Yii::app()->createUrl('site/contact')) ?></li>
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