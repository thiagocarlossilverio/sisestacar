<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $model VeiculosClientesPagamentos */

$this->breadcrumbs=array(
	'Veiculos Clientes Pagamentoses'=>array('index'),
	$model->idveiculo_cliente_pagamento=>array('view','id'=>$model->idveiculo_cliente_pagamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List VeiculosClientesPagamentos', 'url'=>array('index')),
	array('label'=>'Create VeiculosClientesPagamentos', 'url'=>array('create')),
	array('label'=>'View VeiculosClientesPagamentos', 'url'=>array('view', 'id'=>$model->idveiculo_cliente_pagamento)),
	array('label'=>'Manage VeiculosClientesPagamentos', 'url'=>array('admin')),
);
?>

<h1>Update VeiculosClientesPagamentos <?php echo $model->idveiculo_cliente_pagamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>