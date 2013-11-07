<?php
$this->breadcrumbs=array(
	'Realizacje'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Zarządzaj realizacjami', 'url'=>array('index')),
	array('label'=>'Nowa realizacja', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('projects-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj realizacjami</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'projects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
            'name'=>'id_cat',
            'value'=>'ProjectsCat::model()->findByPk($data->id_cat)->name;',
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
