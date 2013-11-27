<div class="con">
	<div class="padding-box align_left">

		<div class="big-header">
		    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/news.png" />
		    aktualności
		</div>
		<div class="list_news recent-news archive">
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'summaryText'=>'',
			));
			?>
			<div class="cl"></div>
		</div>
	</div>
</div>
