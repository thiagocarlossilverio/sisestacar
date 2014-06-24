<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */

$this->breadcrumbs=array(
	'Veiculoses'=>array('index'),
	$model->idveiculo,
);

$this->menu=array(
	array('label'=>'List Veiculos', 'url'=>array('index')),
	array('label'=>'Create Veiculos', 'url'=>array('create')),
	array('label'=>'Update Veiculos', 'url'=>array('update', 'id'=>$model->idveiculo)),
	array('label'=>'Delete Veiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idveiculo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Veiculos', 'url'=>array('admin')),
);
?>

<h1>View Veiculos #<?php echo $model->idveiculo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idveiculo',
		'idmodelo',
		'idcategoria_veiculos',
		'cor',
		'ano',
	),
)); ?>
