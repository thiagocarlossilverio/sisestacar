<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $model VeiculosClientesPagamentos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idveiculo_cliente_pagamento'); ?>
		<?php echo $form->textField($model,'idveiculo_cliente_pagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idveiculo'); ?>
		<?php echo $form->textField($model,'idveiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcliente'); ?>
		<?php echo $form->textField($model,'idcliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_entrada'); ?>
		<?php echo $form->textField($model,'hora_entrada',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_saida'); ?>
		<?php echo $form->textField($model,'hora_saida',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_entrada'); ?>
		<?php echo $form->textField($model,'data_entrada',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_saida'); ?>
		<?php echo $form->textField($model,'data_saida',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpagamento'); ?>
		<?php echo $form->textField($model,'idpagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_pagamento'); ?>
		<?php echo $form->textField($model,'status_pagamento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->