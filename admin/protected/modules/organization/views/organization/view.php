<?php
/* @var $this OrganizationController */
/* @var $model Organization */

$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	$model->OrgID,
);

$this->menu=array(
	array('label'=>'List Organization', 'url'=>array('index')),
	array('label'=>'Create Organization', 'url'=>array('create')),
	array('label'=>'Update Organization', 'url'=>array('update', 'id'=>$model->OrgID)),
	array('label'=>'Delete Organization', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->OrgID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Organization', 'url'=>array('admin')),
);
?>

<h1>View Organization #<?php echo $model->OrgID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'OrgID',
		'OrganizationName',
		'type_id',
		'IndCategoryID',
		'Address1',
		'Address2',
		'City',
		'State',
		'Country',
		'Postcode',
		'Telephone',
		'Fax',
		'Email',
		'Website',
	),
)); ?>
