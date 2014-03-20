<?php
$this->breadcrumbs=array(
	'Kategorie realizacji'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Nowa kategoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('projects-cat-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj kategoriami realizacji</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'projects-cat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
