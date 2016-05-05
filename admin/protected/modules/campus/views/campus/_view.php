<?php
/* @var $this CampusController */
/* @var $data Campus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CampusID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CampusID), array('view', 'id'=>$data->CampusID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CampusName')); ?>:</b>
	<?php echo CHtml::encode($data->CampusName); ?>
	<br />


</div>