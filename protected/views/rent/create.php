<?php
$this->breadcrumbs=array(
	'Rents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista sprzętów', 'url'=>array('admin'))
);
?>

<h1>Nowy sprzęt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>