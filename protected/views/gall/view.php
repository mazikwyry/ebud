<?php
$this->breadcrumbs=array(
	'Galls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Gall', 'url'=>array('index')),
	array('label'=>'Create Gall', 'url'=>array('create')),
	array('label'=>'Update Gall', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gall', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gall', 'url'=>array('admin')),
);
?>

<h1>View Gall #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_parent',
		'parent_type',
		'photo',
	),
)); ?>
