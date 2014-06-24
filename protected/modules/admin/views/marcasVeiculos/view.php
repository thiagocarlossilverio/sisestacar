<?php
/* @var $this MarcasVeiculosController */
/* @var $model MarcasVeiculos */

$this->breadcrumbs=array(
	'Marcas Veiculoses'=>array('index'),
	$model->idmarca,
);

$this->menu=array(
	array('label'=>'List MarcasVeiculos', 'url'=>array('index')),
	array('label'=>'Create MarcasVeiculos', 'url'=>array('create')),
	array('label'=>'Update MarcasVeiculos', 'url'=>array('update', 'id'=>$model->idmarca)),
	array('label'=>'Delete MarcasVeiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmarca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarcasVeiculos', 'url'=>array('admin')),
);
?>

<h1>View MarcasVeiculos #<?php echo $model->idmarca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmarca',
		'titulo',
	),
)); ?>
