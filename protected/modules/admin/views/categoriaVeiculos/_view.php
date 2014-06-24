<?php
/* @var $this CategoriaVeiculosController */
/* @var $data CategoriaVeiculos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria_veiculos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcategoria_veiculos), array('view', 'id'=>$data->idcategoria_veiculos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->nome_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>