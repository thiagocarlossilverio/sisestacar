<?php
/* @var $this MarcasVeiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Marcas Veiculoses',
);

$this->menu=array(
	array('label'=>'Create MarcasVeiculos', 'url'=>array('create')),
	array('label'=>'Manage MarcasVeiculos', 'url'=>array('admin')),
);
?>

<h1>Marcas Veiculoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
