<?php
/* @var $this SkillController */
/* @var $model Skill */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SkillID'); ?>
		<?php echo $form->textField($model,'SkillID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SkillDescription'); ?>
		<?php echo $form->textField($model,'SkillDescription',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skillCatID'); ?>
		<?php echo $form->textField($model,'skillCatID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->