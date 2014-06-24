<?php
/* @var $this GaragensController */
/* @var $model Garagens */

$this->breadcrumbs=array(
	'Garagens'=>array('index'),
	$model->idgaragem,
);

$this->menu=array(
	array('label'=>'List Garagens', 'url'=>array('index')),
	array('label'=>'Create Garagens', 'url'=>array('create')),
	array('label'=>'Update Garagens', 'url'=>array('update', 'id'=>$model->idgaragem)),
	array('label'=>'Delete Garagens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idgaragem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Garagens', 'url'=>array('admin')),
);
?>

<h1>View Garagens #<?php echo $model->idgaragem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idgaragem',
		'idestacionamento',
		'idveiculo',
		'nome',
		'status',
	),
)); ?>
