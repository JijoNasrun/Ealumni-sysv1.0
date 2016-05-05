<?php
/* @var $this RaceController */
/* @var $model Race */

$this->breadcrumbs=array(
	'Races'=>array('index'),
	$model->RaceID,
);

?>

<h1>View Race #<?php echo $model->RaceID; ?></h1>

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
							'RaceID',
							'RaceName',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
