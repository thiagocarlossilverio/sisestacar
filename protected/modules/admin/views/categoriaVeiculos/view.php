<?php
/* @var $this CategoriaVeiculosController */
/* @var $model CategoriaVeiculos */

$this->breadcrumbs=array(
	'Categoria Veiculoses'=>array('index'),
	$model->idcategoria_veiculos,
);

$this->menu=array(
	array('label'=>'List CategoriaVeiculos', 'url'=>array('index')),
	array('label'=>'Create CategoriaVeiculos', 'url'=>array('create')),
	array('label'=>'Update CategoriaVeiculos', 'url'=>array('update', 'id'=>$model->idcategoria_veiculos)),
	array('label'=>'Delete CategoriaVeiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcategoria_veiculos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoriaVeiculos', 'url'=>array('admin')),
);
?>

<h1>View CategoriaVeiculos #<?php echo $model->idcategoria_veiculos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcategoria_veiculos',
		'nome_categoria',
		'descricao',
	),
)); ?>
