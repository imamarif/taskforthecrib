<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpenjualan'); ?>
		<?php echo $form->textField($model,'idpenjualan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddatauser'); ?>
		<?php echo $form->textField($model,'iddatauser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idproduct'); ?>
		<?php echo $form->textField($model,'idproduct'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->