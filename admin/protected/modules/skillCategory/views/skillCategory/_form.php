<?php
/* @var $this SkillCategoryController */
/* @var $model SkillCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'skill-category-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'skill-category'=>'form'),
)); ?>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'SkillCatID', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'SkillCatID',array('size'=>1,'maxlength'=>1,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'SkillCatID'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'SkillCatName', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'SkillCatName',array('size'=>1,'maxlength'=>1,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'SkillCatName'); ?>
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