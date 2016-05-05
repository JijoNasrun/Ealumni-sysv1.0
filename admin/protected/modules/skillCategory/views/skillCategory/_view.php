<?php
/* @var $this SkillCategoryController */
/* @var $data SkillCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SkillCatID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SkillCatID), array('view', 'id'=>$data->SkillCatID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SkillCatName')); ?>:</b>
	<?php echo CHtml::encode($data->SkillCatName); ?>
	<br />


</div>