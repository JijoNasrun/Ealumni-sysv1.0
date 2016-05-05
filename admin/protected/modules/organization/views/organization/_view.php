<?php
/* @var $this OrganizationController */
/* @var $data Organization */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrgID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->OrgID), array('view', 'id'=>$data->OrgID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrganizationName')); ?>:</b>
	<?php echo CHtml::encode($data->OrganizationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IndCategoryID')); ?>:</b>
	<?php echo CHtml::encode($data->IndCategoryID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address1')); ?>:</b>
	<?php echo CHtml::encode($data->Address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address2')); ?>:</b>
	<?php echo CHtml::encode($data->Address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('City')); ?>:</b>
	<?php echo CHtml::encode($data->City); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('State')); ?>:</b>
	<?php echo CHtml::encode($data->State); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Country')); ?>:</b>
	<?php echo CHtml::encode($data->Country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Postcode')); ?>:</b>
	<?php echo CHtml::encode($data->Postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telephone')); ?>:</b>
	<?php echo CHtml::encode($data->Telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fax')); ?>:</b>
	<?php echo CHtml::encode($data->Fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Website')); ?>:</b>
	<?php echo CHtml::encode($data->Website); ?>
	<br />

	*/ ?>

</div>