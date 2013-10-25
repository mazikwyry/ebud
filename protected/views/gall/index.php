<?php
$this->breadcrumbs=array(
	'Galls',
);

$this->menu=array(
	array('label'=>'Create Gall', 'url'=>array('create')),
	array('label'=>'Manage Gall', 'url'=>array('admin')),
);
?>

<h1>Galls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
