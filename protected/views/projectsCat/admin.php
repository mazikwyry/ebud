<?php
$this->breadcrumbs=array(
	'Projects Cats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProjectsCat', 'url'=>array('index')),
	array('label'=>'Create ProjectsCat', 'url'=>array('create')),
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
