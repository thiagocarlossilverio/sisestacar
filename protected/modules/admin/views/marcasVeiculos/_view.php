<?php
/* @var $this MarcasVeiculosController */
/* @var $data MarcasVeiculos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmarca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmarca), array('view', 'id'=>$data->idmarca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />


</div>