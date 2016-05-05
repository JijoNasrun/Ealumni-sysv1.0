<?php
/* @var $this SalaryRangeController */
/* @var $model SalaryRange */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SalRangeID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'SalRangeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SalRangeValue',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'SalRangeValue',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->