<?php
/* @var $this TabelaPrecosController */
/* @var $model TabelaPrecos */

$this->breadcrumbs=array(
	'Tabela Precoses'=>array('index'),
	$model->idtabela_precos=>array('view','id'=>$model->idtabela_precos),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabelaPrecos', 'url'=>array('index')),
	array('label'=>'Create TabelaPrecos', 'url'=>array('create')),
	array('label'=>'View TabelaPrecos', 'url'=>array('view', 'id'=>$model->idtabela_precos)),
	array('label'=>'Manage TabelaPrecos', 'url'=>array('admin')),
);
?>

<h1>Update TabelaPrecos <?php echo $model->idtabela_precos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>