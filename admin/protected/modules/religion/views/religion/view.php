<?php
/* @var $this ReligionController */
/* @var $model Religion */

$this->breadcrumbs=array(
	'Religions'=>array('index'),
	$model->ReligionID,
);

?>

<h1>View Religion #<?php echo $model->ReligionID; ?></h1>

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
							'ReligionID',
							'ReligionName',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
