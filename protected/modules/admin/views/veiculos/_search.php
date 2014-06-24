<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idveiculo'); ?>
		<?php echo $form->textField($model,'idveiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmodelo'); ?>
		<?php echo $form->textField($model,'idmodelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcategoria_veiculos'); ?>
		<?php echo $form->textField($model,'idcategoria_veiculos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cor'); ?>
		<?php echo $form->textField($model,'cor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->