<?php
/* @var $this EstacionamentosController */
/* @var $model Estacionamentos */

$this->breadcrumbs=array(
	'Estacionamentoses'=>array('index'),
	$model->idestacionamento,
);

$this->menu=array(
	array('label'=>'List Estacionamentos', 'url'=>array('index')),
	array('label'=>'Create Estacionamentos', 'url'=>array('create')),
	array('label'=>'Update Estacionamentos', 'url'=>array('update', 'id'=>$model->idestacionamento)),
	array('label'=>'Delete Estacionamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestacionamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estacionamentos', 'url'=>array('admin')),
);
?>

<h1>View Estacionamentos #<?php echo $model->idestacionamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestacionamento',
		'nome',
		'proprietario',
		'cidade',
		'estado',
		'endereco',
		'numero',
		'cnpj',
	),
)); ?>
