<?php
$this->breadcrumbs=array(
	'Realizacje'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Zarządzaj realizacjami', 'url'=>array('admin')),
	array('label'=>'Nowa realizacja', 'url'=>array('create')),
	array('label'=>'Zobacz realizację', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Edytuj realizację</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>