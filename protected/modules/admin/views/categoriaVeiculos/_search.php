<?php
/* @var $this CategoriaVeiculosController */
/* @var $model CategoriaVeiculos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcategoria_veiculos'); ?>
		<?php echo $form->textField($model,'idcategoria_veiculos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_categoria'); ?>
		<?php echo $form->textField($model,'nome_categoria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->