<?php
/* @var $this ModeController */
/* @var $model Mode */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<div class="row">
		<?php echo $form->label($model,'ModeID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'ModeID',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ModeName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'ModeName',array('size'=>58,'maxlength'=>58)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->