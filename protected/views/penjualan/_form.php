<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penjualan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'iddatauser',array('value'=>$iduser)); ?>
		<?php echo $form->error($model,'iddatauser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pilih product'); ?>
		<?php echo $form->dropDownList($model,'idproduct',CHtml::listData(Product::model()->findAll(array('order' => 'nama')),'idproduct','nama')); ?>

		<?php echo $form->error($model,'idproduct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->