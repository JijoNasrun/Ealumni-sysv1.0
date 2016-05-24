<?php
/* @var $this PendingController */
/* @var $model Pending */

$this->breadcrumbs=array(
	'Pendings'=>array('index'),
	$model->pending_id,
);

?>

<h1>View Pending #<?php echo $model->pending_id; ?></h1>

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
							'pending_id',
							'pending_name',
							'pending_IC',
							'pending_email',
							'pending_program',
							'pending_yearG',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>