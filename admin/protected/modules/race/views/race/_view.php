<?php
/* @var $this RaceController */
/* @var $data Race */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RaceID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RaceID), array('view', 'id'=>$data->RaceID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RaceName')); ?>:</b>
	<?php echo CHtml::encode($data->RaceName); ?>
	<br />


</div>