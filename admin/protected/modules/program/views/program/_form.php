<?php
/* @var $this ProgramController */
/* @var $model Program */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'program-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'program'=>'form'),
)); ?>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ProgramID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'ProgramID',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'ProgramID'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ProgramName', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'ProgramName',array('size'=>60,'maxlength'=>74,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'ProgramName'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FacID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'FacID',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'FacID'); ?>
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