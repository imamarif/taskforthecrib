<?php
/* @var $this PenjualanController */
/* @var $data Penjualan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpenjualan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpenjualan), array('view', 'id'=>$data->idpenjualan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama user')); ?>:</b>
	<?php echo CHtml::encode(Datauser::model()->findbypk($data->iddatauser)->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama product')); ?>:</b>
	<?php echo CHtml::encode(Product::model()->findbypk($data->idproduct)->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />


</div>