<?php
$this->breadcrumbs=array(
	'Kategorie realizacji'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Zarządzaj kategoriami', 'url'=>array('admin')),
	array('label'=>'Nowa kategoria', 'url'=>array('create')),
	array('label'=>'Zobacz kategorię', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Edytuj kategorię realizacji: <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>