<?php
/* @var $this AlumniController */
/* @var $data Alumni */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_matrik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_matrik), array('view', 'id'=>$data->no_matrik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gelaran')); ?>:</b>
	<?php echo CHtml::encode($data->gelaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kp')); ?>:</b>
	<?php echo CHtml::encode($data->no_kp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarikh_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tarikh_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_mula')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_mula); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jantina')); ?>:</b>
	<?php echo CHtml::encode($data->jantina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taraf_WARGANEGARA')); ?>:</b>
	<?php echo CHtml::encode($data->taraf_WARGANEGARA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgpa')); ?>:</b>
	<?php echo CHtml::encode($data->cgpa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelas_ijazah')); ?>:</b>
	<?php echo CHtml::encode($data->kelas_ijazah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_pengajian')); ?>:</b>
	<?php echo CHtml::encode($data->mod_pengajian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peringkat_pengajian')); ?>:</b>
	<?php echo CHtml::encode($data->peringkat_pengajian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cawangan')); ?>:</b>
	<?php echo CHtml::encode($data->cawangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fakulti')); ?>:</b>
	<?php echo CHtml::encode($data->Fakulti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gugusan')); ?>:</b>
	<?php echo CHtml::encode($data->Gugusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kod_program')); ?>:</b>
	<?php echo CHtml::encode($data->kod_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program')); ?>:</b>
	<?php echo CHtml::encode($data->program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarikh_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tarikh_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_graduasi')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_graduasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarikh_konvo')); ?>:</b>
	<?php echo CHtml::encode($data->tarikh_konvo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_tel')); ?>:</b>
	<?php echo CHtml::encode($data->no_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_office_tel')); ?>:</b>
	<?php echo CHtml::encode($data->home_office_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bandar_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->bandar_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negeri_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->negeri_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poskod_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->poskod_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negara_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->negara_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calamat_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->calamat_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbandar_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->cbandar_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnegeri_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->cnegeri_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cposkod_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->cposkod_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnegara_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->cnegara_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_rasmi')); ?>:</b>
	<?php echo CHtml::encode($data->email_rasmi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campus')); ?>:</b>
	<?php echo CHtml::encode($data->campus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empStatus')); ?>:</b>
	<?php echo CHtml::encode($data->empStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('relate')); ?>:</b>
	<?php echo CHtml::encode($data->relate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salRangeId')); ?>:</b>
	<?php echo CHtml::encode($data->salRangeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgID')); ?>:</b>
	<?php echo CHtml::encode($data->orgID); ?>
	<br />

	*/ ?>

</div>