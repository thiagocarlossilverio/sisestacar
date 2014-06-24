<?php
/* @var $this CategoriaVeiculosController */
/* @var $model CategoriaVeiculos */

$this->breadcrumbs=array(
	'Categoria Veiculoses'=>array('index'),
	$model->idcategoria_veiculos=>array('view','id'=>$model->idcategoria_veiculos),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoriaVeiculos', 'url'=>array('index')),
	array('label'=>'Create CategoriaVeiculos', 'url'=>array('create')),
	array('label'=>'View CategoriaVeiculos', 'url'=>array('view', 'id'=>$model->idcategoria_veiculos)),
	array('label'=>'Manage CategoriaVeiculos', 'url'=>array('admin')),
);
?>

<h1>Update CategoriaVeiculos <?php echo $model->idcategoria_veiculos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>