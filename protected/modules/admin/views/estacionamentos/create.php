<?php
/* @var $this EstacionamentosController */
/* @var $model Estacionamentos */

$this->breadcrumbs=array(
	'Estacionamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estacionamentos', 'url'=>array('index')),
	array('label'=>'Manage Estacionamentos', 'url'=>array('admin')),
);
?>

<h1>Create Estacionamentos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>