<?php
/* @var $this LevelController */
/* @var $model Level */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<div class="row">
		<?php echo $form->label($model,'LevelID',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'LevelID',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LevelName',array('class'=>'col-lg-2 control-label')); ?>
		<?php echo $form->textField($model,'LevelName',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'col-lg-2 control-label')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->