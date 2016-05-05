<?php
/* @var $this OrganizationController */
/* @var $model Organization */

$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	$model->OrgID=>array('view','id'=>$model->OrgID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Organization', 'url'=>array('index')),
	array('label'=>'Create Organization', 'url'=>array('create')),
	array('label'=>'View Organization', 'url'=>array('view', 'id'=>$model->OrgID)),
	array('label'=>'Manage Organization', 'url'=>array('admin')),
);
?>

<h1>Update Organization <?php echo $model->OrgID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>