<?php
/* @var $this IndustrialCategoryController */
/* @var $model IndustrialCategory */

$this->breadcrumbs=array(
	'Industrial Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndustrialCategory', 'url'=>array('index')),
	array('label'=>'Manage IndustrialCategory', 'url'=>array('admin')),
);
?>

<h1>Create IndustrialCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>