<?php
/* @var $this ModelosVeiculosController */
/* @var $model ModelosVeiculos */

$this->breadcrumbs=array(
	'Modelos Veiculoses'=>array('index'),
	$model->idmodelo,
);

$this->menu=array(
	array('label'=>'List ModelosVeiculos', 'url'=>array('index')),
	array('label'=>'Create ModelosVeiculos', 'url'=>array('create')),
	array('label'=>'Update ModelosVeiculos', 'url'=>array('update', 'id'=>$model->idmodelo)),
	array('label'=>'Delete ModelosVeiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmodelo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelosVeiculos', 'url'=>array('admin')),
);
?>

<h1>View ModelosVeiculos #<?php echo $model->idmodelo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmodelo',
		'nome_modelo',
		'idmarca',
		'status',
	),
)); ?>
