<?php
/* @var $this VeiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Veiculoses',
);

$this->menu=array(
	array('label'=>'Create Veiculos', 'url'=>array('create')),
	array('label'=>'Manage Veiculos', 'url'=>array('admin')),
);
?>

<h1>Veiculoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
