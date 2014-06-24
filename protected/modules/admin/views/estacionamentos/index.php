<?php
/* @var $this EstacionamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estacionamentoses',
);

$this->menu=array(
	array('label'=>'Create Estacionamentos', 'url'=>array('create')),
	array('label'=>'Manage Estacionamentos', 'url'=>array('admin')),
);
?>

<h1>Estacionamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
