<?php
$this->breadcrumbs=array(
	'o firmie',
	'aktualności',
);

$this->menu=array(
	array('label'=>'Nowy news', 'url'=>array('create')),
	array('label'=>'Zarządzaj newsami', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
