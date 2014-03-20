<?php
$this->breadcrumbs=array(
	'Wypożyczalnia'=>array('index'),
	'Nowy sprzęt',
);

$this->menu=array(
	array('label'=>'Lista sprzętów', 'url'=>array('admin'))
);
?>

<h1>Nowy sprzęt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>