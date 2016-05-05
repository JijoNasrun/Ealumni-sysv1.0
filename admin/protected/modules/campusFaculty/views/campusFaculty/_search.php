<?php
/* @var $this CampusFacultyController */
/* @var $model CampusFaculty */
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
		<?php echo $form->label($model,'FacID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'FacID',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->