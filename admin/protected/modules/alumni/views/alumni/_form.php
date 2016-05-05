<?php
/* @var $this AlumniController */
/* @var $model Alumni */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumni-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'alumni'=>'form'),
)); ?>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<label class="col-lg-8">
			<p class="note">Fields with <span class="required">*</span> are required.</p></label>
		</label>
    </div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'no_matrik', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'no_matrik',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'no_matrik'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'nama'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'gelaran', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'gelaran',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'gelaran'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'no_kp', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'no_kp',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'no_kp'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tarikh_lahir', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'tarikh_lahir',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'tarikh_lahir'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama_pekerjaan', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'nama_pekerjaan',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'nama_pekerjaan'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tahun_mula', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'tahun_mula',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'tahun_mula'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jantina', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'jantina',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'jantina'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'taraf_WARGANEGARA', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'taraf_WARGANEGARA',array('size'=>29,'maxlength'=>29,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'taraf_WARGANEGARA'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cgpa', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'cgpa',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'cgpa'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kelas_ijazah', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'kelas_ijazah',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'kelas_ijazah'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mod_pengajian', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'mod_pengajian',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'mod_pengajian'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'peringkat_pengajian', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'peringkat_pengajian',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'peringkat_pengajian'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'cawangan', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'cawangan',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'cawangan'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Fakulti', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'Fakulti',array('size'=>46,'maxlength'=>46,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'Fakulti'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Gugusan', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'Gugusan',array('size'=>3,'maxlength'=>3,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'Gugusan'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kod_program', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'kod_program',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'kod_program'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'program', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'program',array('size'=>60,'maxlength'=>60,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'program'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tarikh_masuk', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'tarikh_masuk',array('size'=>14,'maxlength'=>14,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'tarikh_masuk'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tahun_graduasi', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($model,'tahun_graduasi',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'tahun_graduasi'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarikh_konvo'); ?>
		<?php echo $form->textField($model,'tarikh_konvo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tarikh_konvo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_tel'); ?>
		<?php echo $form->textField($model,'no_tel',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'no_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_office_tel'); ?>
		<?php echo $form->textField($model,'home_office_tel',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'home_office_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>113)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bandar_tetap'); ?>
		<?php echo $form->textField($model,'bandar_tetap',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bandar_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negeri_tetap'); ?>
		<?php echo $form->textField($model,'negeri_tetap',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'negeri_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poskod_tetap'); ?>
		<?php echo $form->textField($model,'poskod_tetap',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'poskod_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negara_tetap'); ?>
		<?php echo $form->textField($model,'negara_tetap',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'negara_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calamat_tetap'); ?>
		<?php echo $form->textField($model,'calamat_tetap',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'calamat_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cbandar_tetap'); ?>
		<?php echo $form->textField($model,'cbandar_tetap',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'cbandar_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnegeri_tetap'); ?>
		<?php echo $form->textField($model,'cnegeri_tetap',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'cnegeri_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cposkod_tetap'); ?>
		<?php echo $form->textField($model,'cposkod_tetap'); ?>
		<?php echo $form->error($model,'cposkod_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnegara_tetap'); ?>
		<?php echo $form->textField($model,'cnegara_tetap',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cnegara_tetap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_rasmi'); ?>
		<?php echo $form->textField($model,'email_rasmi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_rasmi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campus'); ?>
		<?php echo $form->textField($model,'campus',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'campus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empStatus'); ?>
		<?php echo $form->textField($model,'empStatus',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'empStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relate'); ?>
		<?php echo $form->textField($model,'relate',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'relate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salRangeId'); ?>
		<?php echo $form->textField($model,'salRangeId'); ?>
		<?php echo $form->error($model,'salRangeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgID'); ?>
		<?php echo $form->textField($model,'orgID'); ?>
		<?php echo $form->error($model,'orgID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->