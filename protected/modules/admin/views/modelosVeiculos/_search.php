<?php
/* @var $this ModelosVeiculosController */
/* @var $model ModelosVeiculos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idmodelo'); ?>
		<?php echo $form->textField($model,'idmodelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_modelo'); ?>
		<?php echo $form->textField($model,'nome_modelo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmarca'); ?>
		<?php echo $form->textField($model,'idmarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->