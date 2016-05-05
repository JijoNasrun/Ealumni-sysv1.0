<?php
/* @var $this UitmQualificationController */
/* @var $model UitmQualification */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'uitm-qualification-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_kp'); ?>
		<?php echo $form->textField($model,'no_kp',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'no_kp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mode'); ?>
		<?php echo $form->textField($model,'mode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProgramID'); ?>
		<?php echo $form->textField($model,'ProgramID',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ProgramID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yearGraduate'); ?>
		<?php echo $form->textField($model,'yearGraduate',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'yearGraduate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->