<?php
/* @var $this ProfessionalismController */
/* @var $model Professionalism */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professionalism-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'professionalism'=>'form'),
)); ?>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'no_kp', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'no_kp',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'no_kp'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'skillID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'skillID',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'skillID'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'certexp', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'certexp',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'certexp'); ?>
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<div class="col-lg-8">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->