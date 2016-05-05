<?php
/* @var $this ReligionController */
/* @var $data Religion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReligionID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ReligionID), array('view', 'id'=>$data->ReligionID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReligionName')); ?>:</b>
	<?php echo CHtml::encode($data->ReligionName); ?>
	<br />


</div>