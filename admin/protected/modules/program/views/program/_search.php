<?php
/* @var $this ProgramController */
/* @var $model Program */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ProgramID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'ProgramID',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProgramName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'ProgramName',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FacID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'FacID',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->