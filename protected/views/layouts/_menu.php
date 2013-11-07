<nav>
 <div class="con">
 <ul>
    <li class="sub-trigger">o firmie</li>
    <li>oferta</li>
    <li><?php echo CHtml::link("realizacje", Yii::app()->createUrl('projectsCat/index')) ?></li>
    <li class="logo"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/gfx/logo.png"), Yii::app()->request->baseUrl."/") ?></li>
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