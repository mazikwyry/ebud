<?php
$this->breadcrumbs=array(
	'o firmie',
	'aktualności'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<div class="news">
	
	<div class="date_added">
		<?php echo substr($model->date_added, 5 ,2)."<span class=\"year\">".substr($model->date_added, 0 ,4)."</span>"; ?>
	</div>
	<h1>
		<?php echo CHtml::encode($model->title); ?>
	</h1>
	<?php if($model->image){ ?>
		<div class="image_preview bigger">
			<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$model->image, "Image"); ?>
		</div>	
	<?php } ?>
	<p class="justify">
		<?php echo nl2br($model->content); ?>
	</p>


</div>