<?php
$this->breadcrumbs=array(
	'Projects Cats',
);

$this->menu=array(
	array('label'=>'Create ProjectsCat', 'url'=>array('create')),
	array('label'=>'Manage ProjectsCat', 'url'=>array('admin')),
);
?>

<h1>Projects Cats</h1>

<?php
	if(count($dataProvider)>0)
		$width = 100 / count($dataProvider);
	else
		$width = "nie ma";
	echo $width;
?>


<?php foreach ($dataProvider as  $model) {
	echo $model->id;
}
?>


