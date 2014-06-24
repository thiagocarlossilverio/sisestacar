<?php
/* @var $this VeiculosController */
/* @var $data Veiculos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idveiculo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idveiculo), array('view', 'id'=>$data->idveiculo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmodelo')); ?>:</b>
	<?php echo CHtml::encode($data->idmodelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria_veiculos')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoria_veiculos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cor')); ?>:</b>
	<?php echo CHtml::encode($data->cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />


</div>