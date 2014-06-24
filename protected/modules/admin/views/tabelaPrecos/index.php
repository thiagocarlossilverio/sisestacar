<?php
/* @var $this TabelaPrecosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tabela Precoses',
);

$this->menu=array(
	array('label'=>'Create TabelaPrecos', 'url'=>array('create')),
	array('label'=>'Manage TabelaPrecos', 'url'=>array('admin')),
);
?>

<h1>Tabela Precoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
