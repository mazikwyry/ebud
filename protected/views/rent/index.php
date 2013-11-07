<?php
$this->breadcrumbs=array(
	'Rents',
);

$this->menu=array(
	array('label'=>'Lista Sprzętów', 'url'=>array('admin')),
	array('label'=>'Nowy Sprzęt', 'url'=>array('create')),
);
?>

<h1>Sprzęty</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
