<div class="con">

	<div class="thirty-box projects-gall left">
		<?php 

			foreach ($model->images as $image) { 
				echo CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$image->photo, "Image");
			}

		 ?>
	 </div>
	 <div class="sixty-five-box right align_left">
		<div class="project_name">
			<?php echo $model->name ?>
		</div>
		<div class="location">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/gfx/location.png"); ?>
			<?php echo $model->place ?>
		</div>
		<p>
			<?php echo $model->description ?>
		</p>
	 </div>
	
	<div class="back_button">
		<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/gfx/back.png"); ?><br/>
		powrót
	</div>


 </div>