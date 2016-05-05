<?php
/* @var $this AlumniController */
/* @var $model Alumni */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_matrik'); ?>
		<?php echo $form->textField($model,'no_matrik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gelaran'); ?>
		<?php echo $form->textField($model,'gelaran',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_kp'); ?>
		<?php echo $form->textField($model,'no_kp',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarikh_lahir'); ?>
		<?php echo $form->textField($model,'tarikh_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pekerjaan'); ?>
		<?php echo $form->textField($model,'nama_pekerjaan',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_mula'); ?>
		<?php echo $form->textField($model,'tahun_mula',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jantina'); ?>
		<?php echo $form->textField($model,'jantina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taraf_WARGANEGARA'); ?>
		<?php echo $form->textField($model,'taraf_WARGANEGARA',array('size'=>29,'maxlength'=>29)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cgpa'); ?>
		<?php echo $form->textField($model,'cgpa',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kelas_ijazah'); ?>
		<?php echo $form->textField($model,'kelas_ijazah',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_pengajian'); ?>
		<?php echo $form->textField($model,'mod_pengajian',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peringkat_pengajian'); ?>
		<?php echo $form->textField($model,'peringkat_pengajian',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cawangan'); ?>
		<?php echo $form->textField($model,'cawangan',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fakulti'); ?>
		<?php echo $form->textField($model,'Fakulti',array('size'=>46,'maxlength'=>46)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gugusan'); ?>
		<?php echo $form->textField($model,'Gugusan',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kod_program'); ?>
		<?php echo $form->textField($model,'kod_program',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program'); ?>
		<?php echo $form->textField($model,'program',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarikh_masuk'); ?>
		<?php echo $form->textField($model,'tarikh_masuk',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_graduasi'); ?>
		<?php echo $form->textField($model,'tahun_graduasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarikh_konvo'); ?>
		<?php echo $form->textField($model,'tarikh_konvo',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_tel'); ?>
		<?php echo $form->textField($model,'no_tel',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_office_tel'); ?>
		<?php echo $form->textField($model,'home_office_tel',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>113)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bandar_tetap'); ?>
		<?php echo $form->textField($model,'bandar_tetap',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'negeri_tetap'); ?>
		<?php echo $form->textField($model,'negeri_tetap',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poskod_tetap'); ?>
		<?php echo $form->textField($model,'poskod_tetap',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'negara_tetap'); ?>
		<?php echo $form->textField($model,'negara_tetap',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calamat_tetap'); ?>
		<?php echo $form->textField($model,'calamat_tetap',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cbandar_tetap'); ?>
		<?php echo $form->textField($model,'cbandar_tetap',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnegeri_tetap'); ?>
		<?php echo $form->textField($model,'cnegeri_tetap',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cposkod_tetap'); ?>
		<?php echo $form->textField($model,'cposkod_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnegara_tetap'); ?>
		<?php echo $form->textField($model,'cnegara_tetap',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_rasmi'); ?>
		<?php echo $form->textField($model,'email_rasmi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'campus'); ?>
		<?php echo $form->textField($model,'campus',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empStatus'); ?>
		<?php echo $form->textField($model,'empStatus',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'relate'); ?>
		<?php echo $form->textField($model,'relate',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salRangeId'); ?>
		<?php echo $form->textField($model,'salRangeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orgID'); ?>
		<?php echo $form->textField($model,'orgID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->