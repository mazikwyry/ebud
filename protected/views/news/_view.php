<div class="fourty-five-box justify left news-homepage">
    <div class="news">
		<h1>
			<?php echo CHtml::encode($data->title); ?>
		</h1>
		<?php if($data->image){ ?>
		<div class="image_preview">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$data->image, "Image"); ?>
		</div>	
		<?php } ?>
		<div class="justify">
			<div class="date_added">
				<?php echo substr($data->date_added, 5 ,2)."<span class=\"year\">".substr($data->date_added, 0 ,4)."</span>"; ?>
			</div>
			<?php echo shortenText($data->content,500,true, $data->id); ?>
		</div>
	</div>
</div>