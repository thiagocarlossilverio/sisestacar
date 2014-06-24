<?php
/* @var $this ModelosVeiculosController */
/* @var $model ModelosVeiculos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'modelos-veiculos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_modelo'); ?>
		<?php echo $form->textField($model,'nome_modelo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marca'); ?>
		<?php echo $form->dropDownList($model,'idmarca',CHtml::listData(MarcasVeiculos::model()->findAll(),'idmarca','titulo'),array('empty'=>'Selecione'));?>
		
		<?php echo $form->error($model,'idmarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(''=>'','1'=>'Ativo','0'=>'Inativo')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->