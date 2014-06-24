<?php
/* @var $this PagamentosController */
/* @var $model Pagamentos */

$this->breadcrumbs=array(
	'Pagamentoses'=>array('index'),
	$model->idpagamento=>array('view','id'=>$model->idpagamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagamentos', 'url'=>array('index')),
	array('label'=>'Create Pagamentos', 'url'=>array('create')),
	array('label'=>'View Pagamentos', 'url'=>array('view', 'id'=>$model->idpagamento)),
	array('label'=>'Manage Pagamentos', 'url'=>array('admin')),
);
?>

<h1>Update Pagamentos <?php echo $model->idpagamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>