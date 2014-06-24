<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Veiculos Clientes Pagamentoses',
);

$this->menu=array(
	array('label'=>'Create VeiculosClientesPagamentos', 'url'=>array('create')),
	array('label'=>'Manage VeiculosClientesPagamentos', 'url'=>array('admin')),
);
?>

<h1>Veiculos Clientes Pagamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
