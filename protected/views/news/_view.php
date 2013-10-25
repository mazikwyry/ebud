<div class="news">
	
	<div class="date_added">
		<?php echo substr($data->date_added, 5 ,2)."<span class=\"year\">".substr($data->date_added, 0 ,4)."</span>"; ?>
	</div>
	<h1>
		<?php echo CHtml::encode($data->title); ?>
	</h1>
	<?php if($data->image){ ?>
	<div class="image_preview">
		<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$data->image, "Image"); ?>
	</div>	
	<?php } ?>
	<p class="justify">
		<?php echo shortenText($data->content,500,true, $data->id); ?>
	</p>


</div>