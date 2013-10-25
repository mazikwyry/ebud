<?php
$this->breadcrumbs=array(
	'Galls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gall', 'url'=>array('index')),
	array('label'=>'Create Gall', 'url'=>array('create')),
	array('label'=>'View Gall', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Gall', 'url'=>array('admin')),
);
?>

<h1>Update Gall <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>