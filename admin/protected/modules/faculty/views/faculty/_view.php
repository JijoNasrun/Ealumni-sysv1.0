<?php
/* @var $this FacultyController */
/* @var $data Faculty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FacID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FacID), array('view', 'id'=>$data->FacID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FacName')); ?>:</b>
	<?php echo CHtml::encode($data->FacName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Classification')); ?>:</b>
	<?php echo CHtml::encode($data->Classification); ?>
	<br />


</div>