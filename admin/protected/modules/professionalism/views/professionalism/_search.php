<?php
/* @var $this ProfessionalismController */
/* @var $model Professionalism */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'professionalID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'professionalID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_kp',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'no_kp',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skillID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'skillID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certexp',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'certexp',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->