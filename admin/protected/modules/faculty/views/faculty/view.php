<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->FacID,
);

?>

<h1>View Faculty #<?php echo $model->FacID; ?></h1>

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
							'FacID',
							'FacName',
							'Classification',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
