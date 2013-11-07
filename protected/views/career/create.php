<?php
$this->breadcrumbs=array(
	'Oferty pracy'=>array('index'),
	'Nowa',
);

$this->menu=array(
	array('label'=>'Zarządzaj ofertami', 'url'=>array('admin')),
);
?>

<h1>Nowa oferta pracy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>