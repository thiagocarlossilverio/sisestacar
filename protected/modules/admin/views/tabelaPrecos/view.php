<?php
/* @var $this TabelaPrecosController */
/* @var $model TabelaPrecos */

$this->breadcrumbs=array(
	'Tabela Precoses'=>array('index'),
	$model->idtabela_precos,
);

$this->menu=array(
	array('label'=>'List TabelaPrecos', 'url'=>array('index')),
	array('label'=>'Create TabelaPrecos', 'url'=>array('create')),
	array('label'=>'Update TabelaPrecos', 'url'=>array('update', 'id'=>$model->idtabela_precos)),
	array('label'=>'Delete TabelaPrecos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtabela_precos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TabelaPrecos', 'url'=>array('admin')),
);
?>

<h1>View TabelaPrecos #<?php echo $model->idtabela_precos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtabela_precos',
		'idcategoria_veiculos',
		'preco',
		'tempo_estacionar',
	),
)); ?>
