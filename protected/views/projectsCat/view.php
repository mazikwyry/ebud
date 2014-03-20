<?php
$this->breadcrumbs=array(
	'Kategorie realizacji'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Zarządzaj kategoriami', 'url'=>array('admin')),
	array('label'=>'Nowa kategoria', 'url'=>array('create')),
	array('label'=>'Edytuj kategorię', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Usuń kategorię', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
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
