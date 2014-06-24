<?php
/* @var $this GaragensController */
/* @var $data Garagens */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idgaragem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idgaragem), array('view', 'id'=>$data->idgaragem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestacionamento')); ?>:</b>
	<?php echo CHtml::encode($data->idestacionamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idveiculo')); ?>:</b>
	<?php echo CHtml::encode($data->idveiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>