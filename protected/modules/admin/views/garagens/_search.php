<?php
/* @var $this GaragensController */
/* @var $model Garagens */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idgaragem'); ?>
		<?php echo $form->textField($model,'idgaragem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idestacionamento'); ?>
		<?php echo $form->textField($model,'idestacionamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idveiculo'); ?>
		<?php echo $form->textField($model,'idveiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
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