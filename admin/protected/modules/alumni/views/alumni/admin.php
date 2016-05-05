<?php
/* @var $this AlumniController */
/* @var $model Alumni */

$this->breadcrumbs=array(
	'Alumnis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Alumni', 'url'=>array('index')),
	array('label'=>'Create Alumni', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumni-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alumnis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumni-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_matrik',
		'nama',
		'gelaran',
		'no_kp',
		'tarikh_lahir',
		'nama_pekerjaan',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
