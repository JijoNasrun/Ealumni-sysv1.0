<?php
/* @var $this UitmQualificationController */
/* @var $model UitmQualification */

$this->breadcrumbs=array(
	'Uitm Qualifications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UitmQualification', 'url'=>array('index')),
	array('label'=>'Manage UitmQualification', 'url'=>array('admin')),
);
?>

<h1>Create UitmQualification</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>