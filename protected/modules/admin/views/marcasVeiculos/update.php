<?php
/* @var $this MarcasVeiculosController */
/* @var $model MarcasVeiculos */

$this->breadcrumbs=array(
	'Marcas Veiculoses'=>array('index'),
	$model->idmarca=>array('view','id'=>$model->idmarca),
	'Update',
);

$this->menu=array(
	array('label'=>'List MarcasVeiculos', 'url'=>array('index')),
	array('label'=>'Create MarcasVeiculos', 'url'=>array('create')),
	array('label'=>'View MarcasVeiculos', 'url'=>array('view', 'id'=>$model->idmarca)),
	array('label'=>'Manage MarcasVeiculos', 'url'=>array('admin')),
);
?>

<h1>Update MarcasVeiculos <?php echo $model->idmarca; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>