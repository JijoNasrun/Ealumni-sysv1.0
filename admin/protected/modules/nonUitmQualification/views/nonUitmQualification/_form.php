<?php
/* @var $this NonUitmQualificationController */
/* @var $model NonUitmQualification */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'non-uitm-qualification-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'non-uitm-qualification'=>'form'),
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
		<?php echo $form->labelEx($model,'level', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'level',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'level'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'university', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'university',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'university'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'yearGraduate', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'yearGraduate',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'yearGraduate'); ?>
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