<?php
/* @var $this SkillController */
/* @var $data Skill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SkillID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SkillID), array('view', 'id'=>$data->SkillID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SkillDescription')); ?>:</b>
	<?php echo CHtml::encode($data->SkillDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillCatID')); ?>:</b>
	<?php echo CHtml::encode($data->skillCatID); ?>
	<br />


</div>