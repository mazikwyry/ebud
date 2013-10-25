<?php
$this->breadcrumbs=array(
	'Rents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rent', 'url'=>array('index')),
	array('label'=>'Create Rent', 'url'=>array('create')),
	array('label'=>'Update Rent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rent', 'url'=>array('admin')),
);
?>

<h1>View Rent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item',
		'description',
		'price',
		'photo',
	),
)); ?>
