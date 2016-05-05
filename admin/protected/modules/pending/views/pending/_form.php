<?php
/* @var $this PendingController */
/* @var $model Pending */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pending-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'pending'=>'form'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pending_name', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'pending_name',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'pending_name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pending_IC', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'pending_IC',array('size'=>12,'maxlength'=>12,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'pending_IC'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pending_email', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'pending_email',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'pending_email'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pending_program', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'pending_program',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'pending_program'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pending_yearG', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'pending_yearG',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'pending_yearG'); ?>
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