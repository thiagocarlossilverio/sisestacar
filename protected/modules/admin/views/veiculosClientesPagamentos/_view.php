<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $data VeiculosClientesPagamentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idveiculo_cliente_pagamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idveiculo_cliente_pagamento), array('view', 'id'=>$data->idveiculo_cliente_pagamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idveiculo')); ?>:</b>
	<?php echo CHtml::encode($data->idveiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_saida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_saida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->data_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_saida')); ?>:</b>
	<?php echo CHtml::encode($data->data_saida); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idpagamento')); ?>:</b>
	<?php echo CHtml::encode($data->idpagamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pagamento')); ?>:</b>
	<?php echo CHtml::encode($data->status_pagamento); ?>
	<br />

	*/ ?>

</div>