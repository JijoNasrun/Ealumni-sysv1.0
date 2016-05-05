<?php
/* @var $this NonUitmQualificationController */
/* @var $model NonUitmQualification */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'qualification_id',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'qualification_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_kp',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'no_kp',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'level',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'level',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'university',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'university',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yearGraduate',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'yearGraduate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->