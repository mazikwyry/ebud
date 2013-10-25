<?php
$this->breadcrumbs=array(
	'Projects Cats'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectsCat', 'url'=>array('index')),
	array('label'=>'Create ProjectsCat', 'url'=>array('create')),
	array('label'=>'View ProjectsCat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectsCat', 'url'=>array('admin')),
);
?>

<h1>Update ProjectsCat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>