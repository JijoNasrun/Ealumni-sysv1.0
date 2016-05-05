<?php
/* @var $this ReligionController */
/* @var $model Religion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ReligionID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'ReligionID',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReligionName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'ReligionName',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->