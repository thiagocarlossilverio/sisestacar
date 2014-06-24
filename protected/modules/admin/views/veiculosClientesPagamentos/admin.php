<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $model VeiculosClientesPagamentos */

$this->breadcrumbs=array(
	'Veiculos Clientes Pagamentoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VeiculosClientesPagamentos', 'url'=>array('index')),
	array('label'=>'Create VeiculosClientesPagamentos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#veiculos-clientes-pagamentos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Veiculos Clientes Pagamentoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'veiculos-clientes-pagamentos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idveiculo_cliente_pagamento',
		'idveiculo',
		'idcliente',
		'hora_entrada',
		'hora_saida',
		'data_entrada',
		/*
		'data_saida',
		'idpagamento',
		'status_pagamento',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
