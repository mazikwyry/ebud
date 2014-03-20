<?php
$this->breadcrumbs=array(
	'Aktualności'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Edycja',
);

$this->menu=array(
	array('label'=>'Zarządzaj newsami', 'url'=>array('admin')),
	array('label'=>'Nowy news', 'url'=>array('create')),
	array('label'=>'Zobacz news', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Zmień news</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>