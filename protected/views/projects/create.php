<?php
$this->breadcrumbs=array(
	'Realizacje'=>array('index'),
	'Nowa',
);

$this->menu=array(
	array('label'=>'Zarządzaj realizacjami', 'url'=>array('admin')),
);
?>

<h1>Nowa realizacja</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>