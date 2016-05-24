<?php
/* @var $this AlumniController */
/* @var $model Alumni */

$this->breadcrumbs=array(
	'Alumnis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alumni', 'url'=>array('index')),
	array('label'=>'Manage Alumni', 'url'=>array('admin')),
);
?>

<h1>Create Alumni</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>