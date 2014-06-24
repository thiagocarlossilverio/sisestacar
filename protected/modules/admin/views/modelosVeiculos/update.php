<?php
/* @var $this ModelosVeiculosController */
/* @var $model ModelosVeiculos */

$this->breadcrumbs=array(
	'Modelos Veiculoses'=>array('index'),
	$model->idmodelo=>array('view','id'=>$model->idmodelo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelosVeiculos', 'url'=>array('index')),
	array('label'=>'Create ModelosVeiculos', 'url'=>array('create')),
	array('label'=>'View ModelosVeiculos', 'url'=>array('view', 'id'=>$model->idmodelo)),
	array('label'=>'Manage ModelosVeiculos', 'url'=>array('admin')),
);
?>

<h1>Update ModelosVeiculos <?php echo $model->idmodelo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>