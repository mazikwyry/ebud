<div class="work">

	<div class="position">
		<?php echo CHtml::encode($data->position); ?>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/more.png" />
	</div>
	<div class="cl"></div>
	<div class="work-desc">
		<?php echo $data->description; ?>
	</div>


</div>