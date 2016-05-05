<?php
/* @var $this AlumniController */
/* @var $model Alumni */

$this->breadcrumbs=array(
	'Alumnis'=>array('index'),
	$model->no_matrik,
);

$this->menu=array(
	array('label'=>'List Alumni', 'url'=>array('index')),
	array('label'=>'Create Alumni', 'url'=>array('create')),
	array('label'=>'Update Alumni', 'url'=>array('update', 'id'=>$model->no_matrik)),
	array('label'=>'Delete Alumni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_matrik),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumni', 'url'=>array('admin')),
);
?>

<h1>View Alumni #<?php echo $model->no_matrik; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_matrik',
		'nama',
		'gelaran',
		'no_kp',
		'tarikh_lahir',
		'nama_pekerjaan',
		'tahun_mula',
		'jantina',
		'taraf_WARGANEGARA',
		'cgpa',
		'kelas_ijazah',
		'mod_pengajian',
		'peringkat_pengajian',
		'cawangan',
		'Fakulti',
		'Gugusan',
		'kod_program',
		'program',
		'tarikh_masuk',
		'tahun_graduasi',
		'tarikh_konvo',
		'no_tel',
		'home_office_tel',
		'alamat',
		'bandar_tetap',
		'negeri_tetap',
		'poskod_tetap',
		'negara_tetap',
		'calamat_tetap',
		'cbandar_tetap',
		'cnegeri_tetap',
		'cposkod_tetap',
		'cnegara_tetap',
		'email_rasmi',
		'staff_id',
		'department',
		'campus',
		'password',
		'empStatus',
		'relate',
		'salRangeId',
		'orgID',
	),
)); ?>
