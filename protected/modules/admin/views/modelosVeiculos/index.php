<?php
/* @var $this ModelosVeiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Modelos Veiculoses',
);

$this->menu=array(
	array('label'=>'Create ModelosVeiculos', 'url'=>array('create')),
	array('label'=>'Manage ModelosVeiculos', 'url'=>array('admin')),
);
?>

<h1>Modelos Veiculoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

?>
