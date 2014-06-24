<?php
/* @var $this GaragensController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Garagens',
);

$this->menu=array(
	array('label'=>'Create Garagens', 'url'=>array('create')),
	array('label'=>'Manage Garagens', 'url'=>array('admin')),
);
?>

<h1>Garagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
