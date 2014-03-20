<div class="rent-el">
	<div class="tr">
		<div class="rent_img">
			<div>
				<?php
					foreach ($data->images as $image) {echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$image->photo, "Image"), Yii::app()->request->baseUrl."/images/images/big/".$image->photo, array('data-lightbox' => 'gall' ));}
				?>
			</div>
		</div>
		<div class="rent_name">
			<?php echo CHtml::encode($data->item); ?>
			<div class="rent-desc">
				<?php echo $data->description ?>
			</div>
		</div>
		<div class="rent_price">
			<span><?php echo CHtml::encode($data->price); ?></span>
		</div>
	</div>
<!-- 	<div class="tr-desc">

	</div> -->
</div>