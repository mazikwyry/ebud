<div class="list_news">
	<?php foreach ($news as  $data) { ?>

		<div class="fourty-five-box justify left news-homepage">
		    <div class="news">
				<h1>
					<?php echo CHtml::encode($data->title); ?>
				</h1>
				<div class="justify">
					<div class="date_added">
						<?php echo substr($data->date_added, 5 ,2)."<span class=\"year\">".substr($data->date_added, 0 ,4)."</span>"; ?>
					</div>
					<?php echo shortenText($data->content,500,true, $data->id); ?>
				</div>
			</div>
		</div>

	<?php } ?>
	<div class="cl"></div>
	<a class="block">Zobacz archiwum &raquo;</a>
</div>

