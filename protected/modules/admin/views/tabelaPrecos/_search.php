<?php
/* @var $this TabelaPrecosController */
/* @var $model TabelaPrecos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idtabela_precos'); ?>
		<?php echo $form->textField($model,'idtabela_precos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcategoria_veiculos'); ?>
		<?php echo $form->textField($model,'idcategoria_veiculos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preco'); ?>
		<?php echo $form->textField($model,'preco',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempo_estacionar'); ?>
		<?php echo $form->textField($model,'tempo_estacionar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->