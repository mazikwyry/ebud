<?php
$this->breadcrumbs=array(
	'Projects Cats'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProjectsCat', 'url'=>array('index')),
	array('label'=>'Create ProjectsCat', 'url'=>array('create')),
	array('label'=>'Update ProjectsCat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProjectsCat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectsCat', 'url'=>array('admin')),
);
?>

<h1>View ProjectsCat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
