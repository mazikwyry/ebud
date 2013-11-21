<?php
$this->breadcrumbs=array(
	'Oferty pracy'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Nowa oferta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('career-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj ofertami pracy</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'career-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'position',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
