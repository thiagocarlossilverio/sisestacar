<?php
/* @var $this EstacionamentosController */
/* @var $model Estacionamentos */

$this->breadcrumbs=array(
	'Estacionamentoses'=>array('index'),
	$model->idestacionamento=>array('view','id'=>$model->idestacionamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estacionamentos', 'url'=>array('index')),
	array('label'=>'Create Estacionamentos', 'url'=>array('create')),
	array('label'=>'View Estacionamentos', 'url'=>array('view', 'id'=>$model->idestacionamento)),
	array('label'=>'Manage Estacionamentos', 'url'=>array('admin')),
);
?>

<h1>Update Estacionamentos <?php echo $model->idestacionamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>