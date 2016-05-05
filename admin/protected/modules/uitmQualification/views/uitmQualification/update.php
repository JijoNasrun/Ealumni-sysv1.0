<?php
/* @var $this UitmQualificationController */
/* @var $model UitmQualification */

$this->breadcrumbs=array(
	'Uitm Qualifications'=>array('index'),
	$model->qualification_id=>array('view','id'=>$model->qualification_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UitmQualification', 'url'=>array('index')),
	array('label'=>'Create UitmQualification', 'url'=>array('create')),
	array('label'=>'View UitmQualification', 'url'=>array('view', 'id'=>$model->qualification_id)),
	array('label'=>'Manage UitmQualification', 'url'=>array('admin')),
);
?>

<h1>Update UitmQualification <?php echo $model->qualification_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>