<?php
$this->breadcrumbs=array(
	'Rents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rent', 'url'=>array('index')),
	array('label'=>'Manage Rent', 'url'=>array('admin')),
);
?>

<h1>Create Rent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>