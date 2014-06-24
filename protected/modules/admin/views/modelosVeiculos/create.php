<?php
/* @var $this ModelosVeiculosController */
/* @var $model ModelosVeiculos */

$this->breadcrumbs=array(
	'Modelos Veiculoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelosVeiculos', 'url'=>array('index')),
	array('label'=>'Manage ModelosVeiculos', 'url'=>array('admin')),
);
?>

<h1>Create ModelosVeiculos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>