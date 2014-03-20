<?php
$this->breadcrumbs=array(
	'Aktualności'=>array('index'),
	'Nowa',
);

$this->menu=array(
	array('label'=>'Zarządzaj newsami', 'url'=>array('admin')),
);
?>

<h1>Nowy News</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>