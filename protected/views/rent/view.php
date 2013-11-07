<?php
$this->breadcrumbs=array(
	'Wypożyczalnia'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista Sprzętów', 'url'=>array('admin')),
	array('label'=>'Nowy Sprzęt', 'url'=>array('create')),
	array('label'=>'Edytuj Sprzęt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Usuń Sprzęt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->item; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item',
		'description',
		'price',
	),
)); ?>
