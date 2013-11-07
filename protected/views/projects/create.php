<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista realizacji', 'url'=>array('admin')),
);
?>

<h1>Nowa realizacja</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>