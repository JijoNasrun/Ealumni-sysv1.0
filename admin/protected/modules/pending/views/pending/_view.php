<?php
/* @var $this PendingController */
/* @var $data Pending */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pending_id), array('view', 'id'=>$data->pending_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_name')); ?>:</b>
	<?php echo CHtml::encode($data->pending_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_IC')); ?>:</b>
	<?php echo CHtml::encode($data->pending_IC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_email')); ?>:</b>
	<?php echo CHtml::encode($data->pending_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_program')); ?>:</b>
	<?php echo CHtml::encode($data->pending_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pending_yearG')); ?>:</b>
	<?php echo CHtml::encode($data->pending_yearG); ?>
	<br />


</div>