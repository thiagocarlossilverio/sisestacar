<?php
/* @var $this MarcasVeiculosController */
/* @var $model MarcasVeiculos */

$this->breadcrumbs=array(
	'Marcas Veiculoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarcasVeiculos', 'url'=>array('index')),
	array('label'=>'Manage MarcasVeiculos', 'url'=>array('admin')),
);
?>

<h1>Create MarcasVeiculos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>