<?php
/* @var $this IndustrialCategoryController */
/* @var $model IndustrialCategory */

$this->breadcrumbs=array(
	'Industrial Categories'=>array('index'),
	$model->IndCategoryID=>array('view','id'=>$model->IndCategoryID),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndustrialCategory', 'url'=>array('index')),
	array('label'=>'Create IndustrialCategory', 'url'=>array('create')),
	array('label'=>'View IndustrialCategory', 'url'=>array('view', 'id'=>$model->IndCategoryID)),
	array('label'=>'Manage IndustrialCategory', 'url'=>array('admin')),
);
?>

<h1>Update IndustrialCategory <?php echo $model->IndCategoryID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>