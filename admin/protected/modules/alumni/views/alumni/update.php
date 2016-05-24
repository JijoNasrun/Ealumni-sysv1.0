<?php
/* @var $this AlumniController */
/* @var $model Alumni */

$this->breadcrumbs=array(
	'Alumnis'=>array('index'),
	$model->no_matrik=>array('view','id'=>$model->no_matrik),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumni', 'url'=>array('index')),
	array('label'=>'Create Alumni', 'url'=>array('create')),
	array('label'=>'View Alumni', 'url'=>array('view', 'id'=>$model->no_matrik)),
	array('label'=>'Manage Alumni', 'url'=>array('admin')),
);
?>

<h1>Update Alumni <?php echo $model->no_matrik; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>