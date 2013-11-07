<?php
$this->breadcrumbs=array(
	'Kategorie realizacji'=>array('index'),
	'Nowa',
);

$this->menu=array(
	array('label'=>'Zarządzaj kategoriami', 'url'=>array('admin')),
);
?>

<h1>Dodaj kategorię realizacji</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>