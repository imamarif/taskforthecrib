<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproduct')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproduct), array('view', 'id'=>$data->idproduct)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />


</div>