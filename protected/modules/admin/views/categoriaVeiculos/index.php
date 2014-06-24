<?php
/* @var $this CategoriaVeiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoria Veiculoses',
);

$this->menu=array(
	array('label'=>'Create CategoriaVeiculos', 'url'=>array('create')),
	array('label'=>'Manage CategoriaVeiculos', 'url'=>array('admin')),
);
?>

<h1>Categoria Veiculoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
