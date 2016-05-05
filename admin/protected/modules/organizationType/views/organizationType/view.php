<?php
/* @var $this OrganizationTypeController */
/* @var $model OrganizationType */

$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	$model->TypeID,
);

$this->menu=array(
	array('label'=>'List OrganizationType', 'url'=>array('index')),
	array('label'=>'Create OrganizationType', 'url'=>array('create')),
	array('label'=>'Update OrganizationType', 'url'=>array('update', 'id'=>$model->TypeID)),
	array('label'=>'Delete OrganizationType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TypeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationType', 'url'=>array('admin')),
);
?>

<h1>View OrganizationType #<?php echo $model->TypeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TypeID',
		'TypeName',
	),
)); ?>
