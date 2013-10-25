<?php
$this->breadcrumbs=array(
	'Rents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rent', 'url'=>array('index')),
	array('label'=>'Create Rent', 'url'=>array('create')),
	array('label'=>'View Rent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rent', 'url'=>array('admin')),
);
?>

<h1>Update Rent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>