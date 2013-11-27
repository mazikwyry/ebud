<?php $this->beginContent('//layouts/content'); ?>
<section class="content">

	<div class="con align_left">   
		<?= $this->clips['header'] ?>
		<div class="twenty-five-box left no-padding">
			<?php
	            $this->beginWidget('zii.widgets.CPortlet');
	            $this->widget('zii.widgets.CMenu', array(
	                'items'=>Yii::app()->controller->menu,
	                'htmlOptions'=>array('class'=>'left-menu'),
	            ));
	            $this->endWidget();
	        ?>
		</div>
		<div class="seventy-box right">

			<?php echo $content; ?>
		</div>

	</div>
	<div class="cl"></div>
</section>


<?php $this->endContent(); ?>