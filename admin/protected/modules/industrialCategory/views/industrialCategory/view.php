<?php
/* @var $this IndustrialCategoryController */
/* @var $model IndustrialCategory */

$this->breadcrumbs=array(
	'Industrial Categories'=>array('index'),
	$model->IndCategoryID,
);

$this->menu=array(
	array('label'=>'List IndustrialCategory', 'url'=>array('index')),
	array('label'=>'Create IndustrialCategory', 'url'=>array('create')),
	array('label'=>'Update IndustrialCategory', 'url'=>array('update', 'id'=>$model->IndCategoryID)),
	array('label'=>'Delete IndustrialCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IndCategoryID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndustrialCategory', 'url'=>array('admin')),
);
?>

<h1>View IndustrialCategory #<?php echo $model->IndCategoryID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IndCategoryID',
		'IndCategoryName',
	),
)); ?>
