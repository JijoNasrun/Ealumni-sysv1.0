<?php
/* @var $this ProgramController */
/* @var $model Program */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	$model->ProgramID,
);

?>

<h1>View Program #<?php echo $model->ProgramID; ?></h1>

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
							'ProgramID',
							'ProgramName',
							'FacID',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>