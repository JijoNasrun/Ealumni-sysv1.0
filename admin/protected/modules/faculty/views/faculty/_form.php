<?php
/* @var $this FacultyController */
/* @var $model Faculty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faculty-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'faculty'=>'form'),
)); ?>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FacID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'FacID',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'FacID'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FacName', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'FacName',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'FacName'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Classification', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'Classification',array('size'=>22,'maxlength'=>22,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'Classification'); ?>
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