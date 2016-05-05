<?php
/* @var $this ProgramController */
/* @var $data Program */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProgramID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProgramID), array('view', 'id'=>$data->ProgramID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProgramName')); ?>:</b>
	<?php echo CHtml::encode($data->ProgramName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FacID')); ?>:</b>
	<?php echo CHtml::encode($data->FacID); ?>
	<br />


</div>