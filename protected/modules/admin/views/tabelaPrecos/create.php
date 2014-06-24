<?php
/* @var $this TabelaPrecosController */
/* @var $model TabelaPrecos */

$this->breadcrumbs=array(
	'Tabela Precoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabelaPrecos', 'url'=>array('index')),
	array('label'=>'Manage TabelaPrecos', 'url'=>array('admin')),
);
?>

<h1>Create TabelaPrecos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>