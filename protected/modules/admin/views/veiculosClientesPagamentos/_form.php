<?php
/* @var $this VeiculosClientesPagamentosController */
/* @var $model VeiculosClientesPagamentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'veiculos-clientes-pagamentos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idveiculo_cliente_pagamento'); ?>
		<?php echo $form->textField($model,'idveiculo_cliente_pagamento'); ?>
		<?php echo $form->error($model,'idveiculo_cliente_pagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idveiculo'); ?>
		<?php echo $form->textField($model,'idveiculo'); ?>
		<?php echo $form->error($model,'idveiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcliente'); ?>
		<?php echo $form->textField($model,'idcliente'); ?>
		<?php echo $form->error($model,'idcliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_entrada'); ?>
		<?php echo $form->textField($model,'hora_entrada',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hora_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_saida'); ?>
		<?php echo $form->textField($model,'hora_saida',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hora_saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_entrada'); ?>
		<?php echo $form->textField($model,'data_entrada',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'data_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_saida'); ?>
		<?php echo $form->textField($model,'data_saida',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'data_saida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idpagamento'); ?>
		<?php echo $form->textField($model,'idpagamento'); ?>
		<?php echo $form->error($model,'idpagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_pagamento'); ?>
		<?php echo $form->textField($model,'status_pagamento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status_pagamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->