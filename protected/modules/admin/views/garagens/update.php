<?php
/* @var $this GaragensController */
/* @var $model Garagens */

$this->breadcrumbs=array(
	'Garagens'=>array('index'),
	$model->idgaragem=>array('view','id'=>$model->idgaragem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Garagens', 'url'=>array('index')),
	array('label'=>'Create Garagens', 'url'=>array('create')),
	array('label'=>'View Garagens', 'url'=>array('view', 'id'=>$model->idgaragem)),
	array('label'=>'Manage Garagens', 'url'=>array('admin')),
);
?>

<h1>Update Garagens <?php echo $model->idgaragem; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>