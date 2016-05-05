<?php
/* @var $this OrganizationController */
/* @var $model Organization */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organization-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'OrganizationName'); ?>
		<?php echo $form->textField($model,'OrganizationName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'OrganizationName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IndCategoryID'); ?>
		<?php echo $form->textField($model,'IndCategoryID'); ?>
		<?php echo $form->error($model,'IndCategoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address1'); ?>
		<?php echo $form->textField($model,'Address1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address2'); ?>
		<?php echo $form->textField($model,'Address2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'City'); ?>
		<?php echo $form->textField($model,'City',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'City'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Country'); ?>
		<?php echo $form->textField($model,'Country',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Postcode'); ?>
		<?php echo $form->textField($model,'Postcode'); ?>
		<?php echo $form->error($model,'Postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telephone'); ?>
		<?php echo $form->textField($model,'Telephone'); ?>
		<?php echo $form->error($model,'Telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fax'); ?>
		<?php echo $form->textField($model,'Fax'); ?>
		<?php echo $form->error($model,'Fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Website'); ?>
		<?php echo $form->textField($model,'Website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Website'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->