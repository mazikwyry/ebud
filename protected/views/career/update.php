<?php
$this->breadcrumbs=array(
	'Oferty pracy'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Zarządzaj ofertami', 'url'=>array('admin')),
	array('label'=>'Nowa oferta', 'url'=>array('create')),
	array('label'=>'Zobacz ofertę', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Edytuj ofertę pracy <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>