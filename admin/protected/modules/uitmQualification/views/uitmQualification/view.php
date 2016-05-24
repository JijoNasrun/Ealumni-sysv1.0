<?php
/* @var $this UitmQualificationController */
/* @var $model UitmQualification */

$this->breadcrumbs=array(
	'Uitm Qualifications'=>array('index'),
	$model->qualification_id,
);

$this->menu=array(
	array('label'=>'List UitmQualification', 'url'=>array('index')),
	array('label'=>'Create UitmQualification', 'url'=>array('create')),
	array('label'=>'Update UitmQualification', 'url'=>array('update', 'id'=>$model->qualification_id)),
	array('label'=>'Delete UitmQualification', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->qualification_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UitmQualification', 'url'=>array('admin')),
);
?>

<h1>View UitmQualification #<?php echo $model->qualification_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'qualification_id',
		'no_kp',
		'level',
		'mode',
		'ProgramID',
		'yearGraduate',
	),
)); ?>
