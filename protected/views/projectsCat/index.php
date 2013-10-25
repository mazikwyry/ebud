<?php
$this->breadcrumbs=array(
	'Projects Cats',
);

$this->menu=array(
	array('label'=>'Create ProjectsCat', 'url'=>array('create')),
	array('label'=>'Manage ProjectsCat', 'url'=>array('admin')),
);
?>

<h1>Projects Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
