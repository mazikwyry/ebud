<?php
$this->breadcrumbs=array(
	'o firmie',
	'aktualności'=>array('index'),
	$model->title,
);
?>
<div class="con">
	<div class="padding-box align_left">

	        <?php
	        $this->widget('zii.widgets.CBreadcrumbs', array(
	            'links'=>$this->breadcrumbs,
	            'separator'=> "<span class=\"separator\">></span>",
	            'homeLink' => "<img src=\"".Yii::app()->request->baseUrl."/images/gfx/home.png\" alt=\"Start\" />"
	        ));
        ?>

		<div class="news">
			
			<div class="date_added">
				<?php echo substr($model->date_added, 5 ,2)."<span class=\"year\">".substr($model->date_added, 0 ,4)."</span>"; ?>
			</div>
			<h1>
				<?php echo CHtml::encode($model->title); ?>
			</h1>
			<?php if($model->image){ ?>
				<div class="image_preview bigger">
					<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$model->image, "Image"); ?>
				</div>	
			<?php } ?>
			<p class="justify">
				<?php echo nl2br($model->content); ?>
			</p>


		</div>

	</div>
</div>
