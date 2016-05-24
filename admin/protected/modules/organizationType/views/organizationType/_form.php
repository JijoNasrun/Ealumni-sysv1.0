<?php
/* @var $this OrganizationTypeController */
/* @var $model OrganizationType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organization-type-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TypeID'); ?>
		<?php echo $form->textField($model,'TypeID',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'TypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TypeName'); ?>
		<?php echo $form->textField($model,'TypeName',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'TypeName'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->