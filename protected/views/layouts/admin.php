<?php $this->beginContent('//layouts/content'); ?>
<section class="content">
    <div class="con align_left">   
        <div class="twenty-five-box left no-padding">
            
            <ul class="left-menu">
                <li class="current"><a>operacje</a></li>
            </ul>
            <?php
                $this->beginWidget('zii.widgets.CPortlet');
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>Yii::app()->controller->menu,
                    'htmlOptions'=>array('class'=>'left-menu'),
                ));
                $this->endWidget();
            ?>
            <br/>

<<<<<<< HEAD
         <ul class="left-menu">
            <li class="current"><a>działy</a></li>
            <li><?php echo CHtml::link("Aktualności", Yii::app()->createUrl("news/admin")); ?><a></a></li>
            <li><?php echo CHtml::link("Kategorie Realizacji", Yii::app()->createUrl("projectsCat/admin")); ?><a></a></li>
            <li><?php echo CHtml::link("Realizacje", Yii::app()->createUrl("projects/admin")); ?><a></a></li>
            <li><?php echo CHtml::link("Wypożyczalnia", Yii::app()->createUrl("rent/admin")); ?><a></a></li>
            <li><?php echo CHtml::link("Oferty pracy", Yii::app()->createUrl("career/admin")); ?><a></a></li>
        </ul>
    </div>
    <div class="seventy-box right">
        <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'separator'=> "<span class=\"separator\">></span>",
            'homeLink' => "<img src=\"".Yii::app()->request->baseUrl."/images/gfx/home.png\" alt=\"Start\" />"
        ));
        ?>
        <?php echo $content; ?>
    </div>
    <div class="cl"></div>
</section>


<?php $this->endContent(); ?>