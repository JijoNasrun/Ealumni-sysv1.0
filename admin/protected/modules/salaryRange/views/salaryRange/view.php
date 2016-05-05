<?php
/* @var $this SalaryRangeController */
/* @var $model SalaryRange */

$this->breadcrumbs=array(
	'Salary Ranges'=>array('index'),
	$model->SalRangeID,
);

?>

<h1>View Salary Range #<?php echo $model->SalRangeID; ?></h1>

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
							'SalRangeID',
							'SalRangeValue',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
