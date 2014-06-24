<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */

$this->breadcrumbs=array(
	'Veiculoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Veiculos', 'url'=>array('index')),
	array('label'=>'Manage Veiculos', 'url'=>array('admin')),
);
?>

<h1>Create Veiculos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>