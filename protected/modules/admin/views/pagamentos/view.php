<?php
/* @var $this PagamentosController */
/* @var $model Pagamentos */

$this->breadcrumbs=array(
	'Pagamentoses'=>array('index'),
	$model->idpagamento,
);

$this->menu=array(
	array('label'=>'List Pagamentos', 'url'=>array('index')),
	array('label'=>'Create Pagamentos', 'url'=>array('create')),
	array('label'=>'Update Pagamentos', 'url'=>array('update', 'id'=>$model->idpagamento)),
	array('label'=>'Delete Pagamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpagamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagamentos', 'url'=>array('admin')),
);
?>

<h1>View Pagamentos #<?php echo $model->idpagamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpagamento',
		'forma_pagamento',
	),
)); ?>
