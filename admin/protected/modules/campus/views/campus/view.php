<?php
/* @var $this CampusController */
/* @var $model Campus */

$this->breadcrumbs=array(
	'Campuses'=>array('index'),
	$model->CampusID,
);

?>

<h1>View Campus #<?php echo $model->CampusID; ?></h1>

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
							'CampusID',
							'CampusName',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
