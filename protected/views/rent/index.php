<?php
$this->breadcrumbs=array(
	'Rents',
);

$this->menu=array(
	array('label'=>'Create Rent', 'url'=>array('create')),
	array('label'=>'Manage Rent', 'url'=>array('admin')),
);
?>

<h1>Rents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
