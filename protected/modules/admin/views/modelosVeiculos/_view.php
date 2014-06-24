<?php
/* @var $this ModelosVeiculosController */
/* @var $data ModelosVeiculos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmodelo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmodelo), array('view', 'id'=>$data->idmodelo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->nome_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marca')); ?>:</b>
	<?php $marca = MarcasVeiculos::model()->findByPk(1000);?>
	<?php echo CHtml::encode($marca->MarcasVeiculos->titulo)?>
	
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>