<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('index'),
	$model->SkillID=>array('view','id'=>$model->SkillID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Skill', 'url'=>array('index')),
	array('label'=>'Create Skill', 'url'=>array('create')),
	array('label'=>'View Skill', 'url'=>array('view', 'id'=>$model->SkillID)),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>

<h1>Update Skill <?php echo $model->SkillID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>