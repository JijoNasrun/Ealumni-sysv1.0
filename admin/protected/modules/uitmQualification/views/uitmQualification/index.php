<?php
/* @var $this UitmQualificationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uitm Qualifications',
);

$this->menu=array(
	array('label'=>'Create UitmQualification', 'url'=>array('create')),
	array('label'=>'Manage UitmQualification', 'url'=>array('admin')),
);
?>

<h1>Uitm Qualifications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
