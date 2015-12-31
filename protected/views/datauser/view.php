<?php
/* @var $this DatauserController */
/* @var $model Datauser */

$this->breadcrumbs=array(
	'Datausers'=>array('index'),
	$model->iddatauser,
);

$this->menu=array(
	array('label'=>'List Datauser', 'url'=>array('index')),
	array('label'=>'Create Datauser', 'url'=>array('create')),
	array('label'=>'Update Datauser', 'url'=>array('update', 'id'=>$model->iddatauser)),
	array('label'=>'Delete Datauser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddatauser),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Datauser', 'url'=>array('admin')),
);
?>

<h1>View Datauser #<?php echo $model->iddatauser; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddatauser',
		'nama',
		'alamat',
		'pekerjaan',
		'username',
		'password',
	),
)); ?>
