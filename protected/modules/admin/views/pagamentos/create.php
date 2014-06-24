<?php
/* @var $this PagamentosController */
/* @var $model Pagamentos */

$this->breadcrumbs=array(
	'Pagamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pagamentos', 'url'=>array('index')),
	array('label'=>'Manage Pagamentos', 'url'=>array('admin')),
);
?>

<h1>Create Pagamentos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>