<?php
/* @var $this PendingController */
/* @var $model Pending */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pending_id',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'pending_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pending_name',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'pending_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pending_IC',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'pending_IC',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pending_email',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'pending_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pending_program',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'pending_program',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'pending_yearG',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'pending_yearG',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->