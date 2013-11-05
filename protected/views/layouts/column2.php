<?php $this->beginContent('//layouts/content'); ?>
<section class="content">
	<div class="con align_left">   
		<div class="twenty-five-box left no-padding">
			<ul class="left-menu">
				<li class="current"><a>aktualności</a></li>
				<li><a>historia</a></li>
				<li><a>zespól</a></li>
				<li><a>misja</a></li>
			</ul>

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
			<?php
			$this->widget('zii.widgets.CBreadcrumbs', array(
			    'links'=>$this->breadcrumbs,
			    'separator'=> "<span class=\"separator\">></span>",
			    'homeLink' => "<img src=\"".Yii::app()->request->baseUrl."/images/gfx/home.png\" alt=\"Start\" />"
			));
			?>
			<?php echo $content; ?>
		</div>

	</div>
	<div class="cl"></div>
</section>


<?php $this->endContent(); ?>