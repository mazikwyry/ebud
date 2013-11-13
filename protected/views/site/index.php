<?php foreach ($news as  $new) { ?>
	<div class="fourty-five-box justify left">
	    <div class="header">
	        <?php echo $new->title; ?>
	    </div>
	    <?php echo $new->content; ?>
	    <br/><br/>
	</div>

<?php } ?>

