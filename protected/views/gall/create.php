<?php
$this->breadcrumbs=array(
	'Galls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gall', 'url'=>array('index')),
	array('label'=>'Manage Gall', 'url'=>array('admin')),
);
?>

<h1>Create Gall</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>