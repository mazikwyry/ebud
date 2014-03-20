<?php
$this->breadcrumbs=array(
	'Oferty pracy'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Zarządzaj ofertami', 'url'=>array('admin')),
	array('label'=>'Nowa oferta', 'url'=>array('create')),
	array('label'=>'Edytuj ofertę', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Usuń ofertę', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Oferta pracy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'position',
		'description',
	),
)); ?>
