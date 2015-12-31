<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */

$this->breadcrumbs=array(
	'Penjualans'=>array('index'),
	$model->idpenjualan=>array('view','id'=>$model->idpenjualan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penjualan', 'url'=>array('index')),
	array('label'=>'Create Penjualan', 'url'=>array('create')),
	array('label'=>'View Penjualan', 'url'=>array('view', 'id'=>$model->idpenjualan)),
	array('label'=>'Manage Penjualan', 'url'=>array('admin')),
);
?>

<h1>Update Penjualan <?php echo $model->idpenjualan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'iduser'=>$iduser)); ?>