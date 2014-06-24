<?php
/* @var $this GaragensController */
/* @var $model Garagens */

$this->breadcrumbs=array(
	'Garagens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Garagens', 'url'=>array('index')),
	array('label'=>'Manage Garagens', 'url'=>array('admin')),
);
?>

<h1>Create Garagens</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>