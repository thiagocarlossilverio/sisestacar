<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $model VeiculosClientesPagamentos */

$this->breadcrumbs=array(
	'Veiculos Clientes Pagamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VeiculosClientesPagamentos', 'url'=>array('index')),
	array('label'=>'Manage VeiculosClientesPagamentos', 'url'=>array('admin')),
);
?>

<h1>Create VeiculosClientesPagamentos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>