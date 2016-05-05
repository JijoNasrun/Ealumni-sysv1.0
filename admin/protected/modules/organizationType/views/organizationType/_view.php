<?php
/* @var $this OrganizationTypeController */
/* @var $data OrganizationType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TypeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TypeID), array('view', 'id'=>$data->TypeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TypeName')); ?>:</b>
	<?php echo CHtml::encode($data->TypeName); ?>
	<br />


</div>