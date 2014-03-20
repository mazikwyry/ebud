<?php
$this->breadcrumbs=array(
	'Wypożyczalnia'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Lista Sprzętów', 'url'=>array('admin')),
	array('label'=>'Nowy Sprzęt', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rent-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj Sprzętami</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rent-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'item',
		'description',
		'price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
