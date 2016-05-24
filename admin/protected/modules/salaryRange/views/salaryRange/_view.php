<?php
/* @var $this SalaryRangeController */
/* @var $data SalaryRange */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SalRangeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SalRangeID), array('view', 'id'=>$data->SalRangeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SalRangeValue')); ?>:</b>
	<?php echo CHtml::encode($data->SalRangeValue); ?>
	<br />


</div>