<?php
/* @var $this StateController */
/* @var $model State */

$this->breadcrumbs=array(
	'States'=>array('index'),
	$model->StateID,
);
?>

<h1>View State #<?php echo $model->StateID; ?></h1>

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
							'StateID',
							'StateName',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
