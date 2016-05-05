<?php
/* @var $this IndustrialCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Industrial Categories',
);

$this->menu=array(
	array('label'=>'Create IndustrialCategory', 'url'=>array('create')),
	array('label'=>'Manage IndustrialCategory', 'url'=>array('admin')),
);
?>

<h1>Industrial Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
