<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista realizacji', 'url'=>array('admin')),
	array('label'=>'Nowa realizacja', 'url'=>array('create')),
	array('label'=>'Zobacz realizację', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Edytuj realizację</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>