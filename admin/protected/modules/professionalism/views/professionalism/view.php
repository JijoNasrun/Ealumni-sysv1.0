<?php
/* @var $this ProfessionalismController */
/* @var $model Professionalism */

$this->breadcrumbs=array(
	'Professionalisms'=>array('index'),
	$model->professionalID,
);

?>

<h1>View Professionalism #<?php echo $model->professionalID; ?></h1>

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
							'professionalID',
							'no_kp',
							'skillID',
							'certexp',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
