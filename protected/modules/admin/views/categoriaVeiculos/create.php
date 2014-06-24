<?php
/* @var $this CategoriaVeiculosController */
/* @var $model CategoriaVeiculos */

$this->breadcrumbs=array(
	'Categoria Veiculoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoriaVeiculos', 'url'=>array('index')),
	array('label'=>'Manage CategoriaVeiculos', 'url'=>array('admin')),
);
?>

<h1>Create CategoriaVeiculos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>