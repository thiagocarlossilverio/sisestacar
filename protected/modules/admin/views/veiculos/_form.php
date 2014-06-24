<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'veiculos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idmodelo'); ?>
		<?php echo $form->textField($model,'idmodelo'); ?>
		<?php echo $form->error($model,'idmodelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcategoria_veiculos'); ?>
		<?php echo $form->textField($model,'idcategoria_veiculos'); ?>
		<?php echo $form->error($model,'idcategoria_veiculos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cor'); ?>
		<?php echo $form->textField($model,'cor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->