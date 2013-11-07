<?php
$this->breadcrumbs=array(
	'Projects Cats',
);

$this->menu=array(
	array('label'=>'Create ProjectsCat', 'url'=>array('create')),
	array('label'=>'Manage ProjectsCat', 'url'=>array('admin')),
);
?>

<?php
	if(count($dataProvider)>0)
		$width = 100 / count($dataProvider);
	else
		$width = 0;
?>

<div class="cat_box">
	<?php foreach ($dataProvider as  $model) { ?>

		<div class="projects_cat" style="width:<?php echo $width;?>%;">
			<span><?php echo $model->name; ?></span> 
			<?php $projects=count($model->projects); ?>
			<?php $height = 100 / $projects; ?>
			<?php foreach ($model->projects as $project) { ?>
				<?php
					$images = "";  
					foreach ($project->images as $image) { 
						$images.=CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$image->photo, "Image");
					}
					$images.= "<span>".$project->name."</span>";
				?>
				<?php echo CHtml::ajaxLink(
				    $images,
				    array('/projects/'.$project->id), // Yii URL
				    array('success' => 'js:function(data) { 
						$(".show-project").slideDown();
						$(".show-project").html(data)
				     }','method' => "GET"),
				    array('class' => 'project', 'style'=>'height:'.$height.'%;')
				); ?>

			<?php }?>
		</div>

	<?php }?>
	<div class="show-project">
	</div>
</div>


