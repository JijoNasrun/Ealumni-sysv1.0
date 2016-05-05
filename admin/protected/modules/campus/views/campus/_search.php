<?php
/* @var $this CampusController */
/* @var $model Campus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CampusID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'CampusID',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CampusName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'CampusName',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->