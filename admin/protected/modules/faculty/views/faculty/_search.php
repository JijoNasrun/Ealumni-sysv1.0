<?php
/* @var $this FacultyController */
/* @var $model Faculty */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FacID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'FacID',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FacName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'FacName',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Classification',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'Classification',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->