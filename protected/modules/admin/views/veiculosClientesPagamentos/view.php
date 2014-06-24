<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $model VeiculosClientesPagamentos */

$this->breadcrumbs=array(
	'Veiculos Clientes Pagamentoses'=>array('index'),
	$model->idveiculo_cliente_pagamento,
);

$this->menu=array(
	array('label'=>'List VeiculosClientesPagamentos', 'url'=>array('index')),
	array('label'=>'Create VeiculosClientesPagamentos', 'url'=>array('create')),
	array('label'=>'Update VeiculosClientesPagamentos', 'url'=>array('update', 'id'=>$model->idveiculo_cliente_pagamento)),
	array('label'=>'Delete VeiculosClientesPagamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idveiculo_cliente_pagamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VeiculosClientesPagamentos', 'url'=>array('admin')),
);
?>

<h1>View VeiculosClientesPagamentos #<?php echo $model->idveiculo_cliente_pagamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idveiculo_cliente_pagamento',
		'idveiculo',
		'idcliente',
		'hora_entrada',
		'hora_saida',
		'data_entrada',
		'data_saida',
		'idpagamento',
		'status_pagamento',
	),
)); ?>
