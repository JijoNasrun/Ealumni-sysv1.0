<?php
/* @var $this CampusController */
/* @var $model Campus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'campus-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'campus'=>'form'),
)); ?>
	
	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CampusID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'CampusID',array('size'=>2,'maxlength'=>2,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'CampusID'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CampusName', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'CampusName',array('size'=>16,'maxlength'=>16,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'CampusName'); ?>
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