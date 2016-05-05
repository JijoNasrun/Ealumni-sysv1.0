<?php
/* @var $this LevelController */
/* @var $data Level */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('LevelID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LevelID), array('view', 'id'=>$data->LevelID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LevelName')); ?>:</b>
	<?php echo CHtml::encode($data->LevelName); ?>
	<br />


</div>