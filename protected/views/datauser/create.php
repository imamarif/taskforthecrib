<?php
/* @var $this DatauserController */
/* @var $model Datauser */

$this->breadcrumbs=array(
	'Datausers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Datauser', 'url'=>array('index')),
	array('label'=>'Manage Datauser', 'url'=>array('admin')),
);
?>

<h1>Create Datauser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>