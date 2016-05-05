<?php
/* @var $this LevelController */
/* @var $model Level */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'level-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'level'=>'form'),
)); ?>
	
	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'LevelID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'LevelID',array('size'=>2,'maxlength'=>2,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'LevelID'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'LevelName', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'LevelName',array('size'=>33,'maxlength'=>33,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'LevelName'); ?>
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