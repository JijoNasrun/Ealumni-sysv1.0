<?php
/* @var $this IndustrialCategoryController */
/* @var $data IndustrialCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IndCategoryID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IndCategoryID), array('view', 'id'=>$data->IndCategoryID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IndCategoryName')); ?>:</b>
	<?php echo CHtml::encode($data->IndCategoryName); ?>
	<br />


</div>