<?php
/* @var $this ProfessionalismController */
/* @var $data Professionalism */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('professionalID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->professionalID), array('view', 'id'=>$data->professionalID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kp')); ?>:</b>
	<?php echo CHtml::encode($data->no_kp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillID')); ?>:</b>
	<?php echo CHtml::encode($data->skillID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certexp')); ?>:</b>
	<?php echo CHtml::encode($data->certexp); ?>
	<br />


</div>