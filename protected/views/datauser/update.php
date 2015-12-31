<?php
/* @var $this DatauserController */
/* @var $model Datauser */

$this->breadcrumbs=array(
	'Datausers'=>array('index'),
	$model->iddatauser=>array('view','id'=>$model->iddatauser),
	'Update',
);

$this->menu=array(
	array('label'=>'List Datauser', 'url'=>array('index')),
	array('label'=>'Create Datauser', 'url'=>array('create')),
	array('label'=>'View Datauser', 'url'=>array('view', 'id'=>$model->iddatauser)),
	array('label'=>'Manage Datauser', 'url'=>array('admin')),
);
?>

<h1>Update Datauser <?php echo $model->iddatauser; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>