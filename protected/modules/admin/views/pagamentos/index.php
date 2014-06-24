<?php
/* @var $this PagamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagamentoses',
);

$this->menu=array(
	array('label'=>'Create Pagamentos', 'url'=>array('create')),
	array('label'=>'Manage Pagamentos', 'url'=>array('admin')),
);
?>

<h1>Pagamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
