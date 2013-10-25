<?php
$this->breadcrumbs=array(
	'Projects Cats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectsCat', 'url'=>array('index')),
	array('label'=>'Manage ProjectsCat', 'url'=>array('admin')),
);
?>

<h1>Create ProjectsCat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>