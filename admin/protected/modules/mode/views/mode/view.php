<?php
/* @var $this ModeController */
/* @var $model Mode */

$this->breadcrumbs=array(
	'Modes'=>array('index'),
	$model->ModeID,
);

?>

<h1>View Mode #<?php echo $model->ModeID; ?></h1>

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
							'ModeID',
							'ModeName',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>