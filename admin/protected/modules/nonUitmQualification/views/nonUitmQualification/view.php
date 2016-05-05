<?php
/* @var $this NonUitmQualificationController */
/* @var $model NonUitmQualification */

$this->breadcrumbs=array(
	'Non Uitm Qualifications'=>array('index'),
	$model->qualification_id,
);

?>

<h1>View NonUitmQualification #<?php echo $model->qualification_id; ?></h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">View</span>
                </div>
                <div class="panel-body">
                	<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$model,
						'attributes'=>array(
							'qualification_id',
							'no_kp',
							'level',
							'university',
							'yearGraduate',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
