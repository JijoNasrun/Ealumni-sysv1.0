<?php
/* @var $this CountryController */
/* @var $data Country */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountryID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CountryID), array('view', 'id'=>$data->CountryID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CountryName')); ?>:</b>
	<?php echo CHtml::encode($data->CountryName); ?>
	<br />


</div>