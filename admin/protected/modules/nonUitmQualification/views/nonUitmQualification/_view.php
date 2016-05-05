<?php
/* @var $this NonUitmQualificationController */
/* @var $data NonUitmQualification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualification_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->qualification_id), array('view', 'id'=>$data->qualification_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kp')); ?>:</b>
	<?php echo CHtml::encode($data->no_kp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('university')); ?>:</b>
	<?php echo CHtml::encode($data->university); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearGraduate')); ?>:</b>
	<?php echo CHtml::encode($data->yearGraduate); ?>
	<br />


</div>