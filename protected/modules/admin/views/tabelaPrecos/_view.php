<?php
/* @var $this TabelaPrecosController */
/* @var $data TabelaPrecos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtabela_precos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtabela_precos), array('view', 'id'=>$data->idtabela_precos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria_veiculos')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoria_veiculos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preco')); ?>:</b>
	<?php echo CHtml::encode($data->preco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempo_estacionar')); ?>:</b>
	<?php echo CHtml::encode($data->tempo_estacionar); ?>
	<br />


</div>