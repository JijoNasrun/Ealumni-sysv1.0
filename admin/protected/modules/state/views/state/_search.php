<?php
/* @var $this StateController */
/* @var $model State */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'StateID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'StateID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StateName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'StateName',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->