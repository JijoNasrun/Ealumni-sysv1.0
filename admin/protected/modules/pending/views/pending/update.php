<?php
/* @var $this PendingController */
/* @var $model Pending */

$this->breadcrumbs=array(
	'Pendings'=>array('index'),
	$model->pending_id=>array('view','id'=>$model->pending_id),
	'Update',
);

?>

<h1>Update Pending <?php echo $model->pending_id; ?></h1>

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