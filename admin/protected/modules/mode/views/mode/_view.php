<?php
/* @var $this ModeController */
/* @var $data Mode */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ModeID), array('view', 'id'=>$data->ModeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ModeName')); ?>:</b>
	<?php echo CHtml::encode($data->ModeName); ?>
	<br />


</div>