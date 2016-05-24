<?php
/* @var $this CampusController */
/* @var $model Campus */

$this->breadcrumbs=array(
	'Campuses'=>array('index'),
	$model->CampusID=>array('view','id'=>$model->CampusID),
	'Update',
);

?>

<h1>Update Campus <?php echo $model->CampusID; ?></h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Update</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
			</div>
		</div>
	</div>
</section>