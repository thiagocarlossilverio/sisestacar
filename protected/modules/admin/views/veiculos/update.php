<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */

$this->breadcrumbs=array(
	'Veiculoses'=>array('index'),
	$model->idveiculo=>array('view','id'=>$model->idveiculo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Veiculos', 'url'=>array('index')),
	array('label'=>'Create Veiculos', 'url'=>array('create')),
	array('label'=>'View Veiculos', 'url'=>array('view', 'id'=>$model->idveiculo)),
	array('label'=>'Manage Veiculos', 'url'=>array('admin')),
);
?>

<h1>Update Veiculos <?php echo $model->idveiculo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>