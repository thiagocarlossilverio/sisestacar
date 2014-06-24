<?php
/* @var $this PagamentosController */
/* @var $data Pagamentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpagamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpagamento), array('view', 'id'=>$data->idpagamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_pagamento')); ?>:</b>
	<?php echo CHtml::encode($data->forma_pagamento); ?>
	<br />


</div>