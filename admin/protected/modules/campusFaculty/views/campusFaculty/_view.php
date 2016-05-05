<?php
/* @var $this CampusFacultyController */
/* @var $data CampusFaculty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CampusID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CampusID), array('view', 'id'=>$data->CampusID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FacID')); ?>:</b>
	<?php echo CHtml::encode($data->FacID); ?>
	<br />


</div>