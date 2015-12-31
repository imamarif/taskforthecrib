<?php
/* @var $this DatauserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datausers',
);

$this->menu=array(
	array('label'=>'Create Datauser', 'url'=>array('create')),
	array('label'=>'Manage Datauser', 'url'=>array('admin')),
);
?>

<h1>Datausers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
