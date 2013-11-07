<?php
$this->breadcrumbs=array(
	'Rents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Sprzętów', 'url'=>array('admin')),
	array('label'=>'Nowy Sprzęt', 'url'=>array('create')),
	array('label'=>'Zobacz Sprzęt', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Edytuj Sprzęt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>